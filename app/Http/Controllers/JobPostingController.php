<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobPosting;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Auth;

class JobPostingController extends Controller
{
    public function index(Request $request)
    {
        $query = JobPosting::query();

        // Sadece yeni isimlendirme ile filtreleme
        if ($request->filled('profession')) {
            $query->where('meslek', $request->profession);
        }
        if ($request->filled('city')) {
            $query->where('sehir', $request->city);
        }
        if ($request->filled('maas_araligi')) {
            $query->where('maas_araligi', $request->maas_araligi);
        }
        if ($request->filled('baslangic_tarihi')) {
            $query->whereDate('baslangic_tarihi', '>=', $request->baslangic_tarihi);
        }
        if ($request->filled('calisma_sekli')) {
            $query->where('calisma_sekli', $request->calisma_sekli);
        }
        if ($request->filled('cinsiyet')) {
            $query->whereIn('cinsiyet', (array)$request->cinsiyet);
        }
        if ($request->filled('yas_min')) {
            $query->where('yas_min', '>=', $request->yas_min);
        }
        if ($request->filled('yas_max')) {
            $query->where('yas_max', '<=', $request->yas_max);
        }

        $ilanlar = $query->paginate(15);
        return view('is_ilanlari.isilanlari', compact('ilanlar'));
    }

    public function apply(Request $request, $id)
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'Başvuru için giriş yapmalısınız.');
        }

        $jobPosting = JobPosting::findOrFail($id);
        $exists = JobApplication::where('user_id', $user->id)
            ->where('job_posting_id', $jobPosting->id)
            ->exists();
        if ($exists) {
            return back()->with('error', 'Bu ilana zaten başvurdunuz.');
        }

        JobApplication::create([
            'user_id' => $user->id,
            'job_posting_id' => $jobPosting->id,
            'cover_letter' => $request->input('cover_letter'),
        ]);

        return back()->with('success', 'Başvurunuz başarıyla alındı.');
    }

    public function myApplications()
    {
        $user = Auth::user();
        $basvurular = JobApplication::with('jobPosting')
            ->where('user_id', $user->id)
            ->latest()
            ->paginate(15);
        return view('is_ilanlari.is_basvurularim', compact('basvurular'));
    }

    public function userJobListingsAjax()
    {
        $userProfessions = auth()->user()->professions()->pluck('professions.id')->toArray();
        $jobPostings = \App\Models\JobPosting::whereHas('professions', function($q) use ($userProfessions) {
            $q->whereIn('professions.id', $userProfessions);
        })->latest()->take(10)->get();
        $html = view('partials.job_listings', compact('jobPostings'))->render();
        return response()->json(['html' => $html]);
    }
}
