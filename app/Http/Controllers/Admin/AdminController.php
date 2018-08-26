<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Servise;

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
        $servises = Servise::all();

        return view('admin.servise')->with(['servises' => $servises]);
    }

    public function servicesAddPost(Request $request)
    {
//        $this->validate($request, [
//            'name' => 'required|min:6|max:20',
//            'desc' => 'required|max:255',
//            'link' => 'required|max:20',
//            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//        ]);

        $name = $request['name'];
        $desc= $request['desc'];
        $link = $request['link'];




        $imageName = time().'.'.$request->file('image')->getClientOriginalExtension();

        $request->image->move(public_path('images/services/'), $imageName);

        $servisaadd = new Servise();

        $servisaadd->name = $name;
        $servisaadd->image = 'images/services/'.$imageName;
        $servisaadd->desc = $desc;
        $servisaadd->link = $link;
       if($servisaadd->save()){
           return redirect()->route('admin.services');
       }

    }

    public function servicesAdd(){

        return view('admin.serviseadd');

    }


    public function servicesEdit($id){
        $serviceedit = new Servise();
        $serviceedit = $serviceedit->where('id', $id)->first();

        return view('admin.serviseedit')->with(['serviceedit' => $serviceedit]);

    }

    public function servicesEditPost(Request $request){

    }
}
