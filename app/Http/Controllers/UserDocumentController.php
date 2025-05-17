<?php

namespace App\Http\Controllers;

use App\Models\UserDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDocumentController extends Controller
{
    public function index()
    {
        $documents = UserDocument::where('user_id', Auth::id())->get();
        return view('KullaniciBilgileri.belgeler', compact('documents'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'document_name' => 'required|string|max:255',
            'document_type' => 'required|string|max:255',
            'issue_date' => 'required|date',
        ]);

        UserDocument::create([
            'user_id' => Auth::id(),
            'document_name' => $request->document_name,
            'document_type' => $request->document_type,
            'issue_date' => $request->issue_date,
        ]);

        return redirect()->back()->with('success', 'Belge başarıyla eklendi.');
    }
}
