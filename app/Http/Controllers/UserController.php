<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $arr = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if ($request->remember == trans('remember.Remember Me')) {
            $remember = true;
        } else {
            $remember = false;
        }

        $locale = session('locale');

        if (Auth::guard('users')->attempt($arr)) {
            return redirect()->route('home', $locale);
            //TODO code
        } else {
            dd('Pls try again later');
            //TODO code
        }
    }

    public function home()
    {
        return view('welcome');
    }
}