<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function adminLogin()
    {
        return view('backend.login');
    }

    public function adminDoLogin(Request $request)
    {
       // dd(request()->all());
        
        $userLogin = $request->except('_token');
        
        $checklogin = Auth::attempt($userLogin);
        if ($checklogin) {
            notify()->success('Sign in Successfully');
            return redirect()->route('admin.home');
        }

        notify()->error('Invalid Username & Password');
        return redirect()->back();

    }


    public function adminLogout()
    {
        Auth::logout();
    }





}
