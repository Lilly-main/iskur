<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function login_process(Request $request)
    {
        $request->validate([
            'id_number' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->except(['_token', 'remember_me']);

        if (auth()->attempt($credentials)) {
            $user = User::where('id_number',$request->id_number)->first();
            \Auth::login($user, false);
            return redirect()->route('dashboard');
        }else{
            session()->flash('message', 'Invalid credentials');
            dd('ops');
        }
        return redirect()->back();
    }

    public function register()
    {
        return view('auth.register');
    }

    public function register_process(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'id_number' => 'required|numeric|digits:11|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'password_confirmation' => 'required|string|same:password',
        ]);
        if ($validator->fails()) {
            dd($validator->errors());
        }
        User::create([
            'name' => $request->name,
            'id_number' => $request->id_number,
            'email' => $request->email,
            'password' => Hash::make($request->password) //bcrypt($request->password),
        ]);

        return redirect()->route('login')->with(['register_okey'=> true]);
    }
}
