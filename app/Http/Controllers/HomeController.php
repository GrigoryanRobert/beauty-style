<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Category;
use App\Language;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $languages = Language::all();
        if( Auth::user()->role === 0){
            return view('pages.home');
        }else{
            return view('pages.master')->with(['languages' => $languages, 'categories' => $categories]);
        }

    }
}
