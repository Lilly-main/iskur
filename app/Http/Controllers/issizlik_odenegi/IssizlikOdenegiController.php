<?php

namespace App\Http\Controllers\issizlik_odenegi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\issizlik_odenegi\IssizlikOdenegiController;
use App\Models\UnemploymentApplication;





class IssizlikOdenegiController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function show()
    {
        // Oturum açmış kullanıcıyı al
        $user = Auth::user();

        // Kullanıcı bilgilerini view'e gönder
        return view('issizlik_odenegi.issizlik_odenegi', compact('user'));
    }

   
    public function showFesihForm()
    {
    // Oturum açmış kullanıcıyı al
    $user = Auth::user();

     // Şehirleri ve ilçeleri al
     $Cities = \App\Models\Cities::with('districts')->get();
 

    // Kullanıcı ve illeri view'e gönder
    return view('issizlik_odenegi.issizlikOdenegiFesih', compact('user', 'Cities'));
    }

    public function storeFesih(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'start_date' => 'required|date',
            'Cities' => 'required|exists:cities,id',
            'district' => 'required|exists:districts,id',
        ]);

        UnemploymentApplication::create([
            'user_id' => auth()->id(),
            'fullname' => $request->fullname,
            'id_number' => $request->phone,
            'fesih_tarihi' => $request->start_date,
            'basvuru_tarihi' => now(),
            'city_id' => $request->Cities,
            'district_id' => $request->district,
        ]);

        return redirect()->back()->with('success', 'Başvurunuz başarıyla kaydedildi.');
    }
    
    
}

