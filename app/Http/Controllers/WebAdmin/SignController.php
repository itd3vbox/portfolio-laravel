<?php

namespace App\Http\Controllers\WebAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use App\Search\WebZero\App as SearchApp;

class SignController extends Controller
{
    public function signIn(Request $request)
    {
        $can_access = auth()->check();
        //dd($can_access);
        if($can_access)
            return redirect()->route('web-admin.home');

        return view('web-admin.sign-in.main', [
            //'app' => SearchApp::signIn(),
        ]);
    }

    public function signInRequest(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) 
        {    
            return redirect()->route('web-admin.home');
        }

        return back()->withErrors([
            'email' => __('auth.failed')
        ]);
    }

    public function signOut(Request $request)
    {
        Auth::logout();
        return redirect()->route('web-admin.sign-in');
    }
}
