<?php

namespace App\Http\Controllers\Pages;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Auth;

class UserController extends Controller
{


    public function userprofilePost(Request $request)
    {
        $this->validate($request, [
            'useradress' => 'required',
            'userphone' => 'required|regex:/(01)[0-9]{9}/',
        ]);


    }
}
