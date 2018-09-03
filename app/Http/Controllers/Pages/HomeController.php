<?php

namespace App\Http\Controllers\Pages;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Auth;

class HomeController extends Controller
{


    public function index()
    {

        return view('pages.index');

    }


    public function about()
    {

        return view('pages.about');

    }

    public function service(){
        return view('pages.service');
    }


    public function gallery(){
        return view('pages.gallery');
    }

    public function contact(){
        return view('pages.contact');
    }

}
