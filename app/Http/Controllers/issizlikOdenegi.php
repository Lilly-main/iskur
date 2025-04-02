<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Controllers\issizlikOdenegi;


class issizlikOdenegi extends Controller
{
    public function issizlik_odenegi()
    {
        return view('issizlik_odenegi');
    }
}