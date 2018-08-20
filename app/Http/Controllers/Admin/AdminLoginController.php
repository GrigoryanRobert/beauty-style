<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    //

    public function __construct(){
        $this->middleware('guest:admin')->except('logout');
    }

    public function adminLoginForm(){
        return view("admin.admin-login");
    }

    public function adminLoginPost(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
            return redirect()->intended(route('admin.home'));
        }

        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect('/');
    }
}
