<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.home');
    }

    public function services()
    {

        return view('admin.servise');
    }

    public function servicesPost(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:6|max:20',
            'desc' => 'required|max:255',
            'link' => 'required|max:20',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $name = $request['name'];
        $desc= $request['desc'];
        $link = $request['link'];

        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images/services/'), $imageName);




    }
}
