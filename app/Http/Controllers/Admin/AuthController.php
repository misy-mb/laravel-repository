<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\admin\AuthRequest;

class AuthController extends Controller
{
    public function login(){
        return view('admin.auth.login');
    }

    public function postlogin(AuthRequest $request)
    {
        $validated = auth()->attempt(
            [
                'email' => $request->email,
                'password' => $request->password
            ]);

            if($validated){
                return redirect()->route('dashboard')->with('success','Login Successfully');
            }else{
                return redirect()->back()->with('error','Invalid Proteintal');
            }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login')->with('success','logout succcess');
    }
}
