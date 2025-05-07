<?php

namespace App\Http\Controllers\issizlik_odenegi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\issizlik_odenegi\IssizlikOdenegiController;





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

    
    
}

