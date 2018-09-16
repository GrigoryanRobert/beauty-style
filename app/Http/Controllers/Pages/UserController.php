<?php

namespace App\Http\Controllers\Pages;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Auth;
use App\Users_profile;

class UserController extends Controller
{


    public function userprofilePost(Request $request)
    {
        $this->validate($request, [
            'useradress' => 'required',
            'userphone' => 'required',
        ]);

        $users_profile = new Users_profile();

        $user_id = $request['userid'];

        $address = $request['useradress'];

        $phone = $request['userphone'];

        $users_profile->user_id = $user_id;
        $users_profile->address = $address;
        $users_profile->phone = $phone;




        if($users_profile->save()){
            return redirect('/home');
        };


    }
}
