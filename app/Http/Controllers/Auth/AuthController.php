<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Socialite;

class AuthController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        try {
            $user = Socialite::driver($provider)->user();
            $input['name'] = $user->getName();
            $input['email'] = $user->getEmail();
            $input['provider'] = $provider;
            $input['provider_id'] = $user->getId();

            $authUser = $this->findOrCreate($input);
            Auth::loginUsingId($authUser->id);

            return redirect()->route('home');


        } catch (Exception $e) {

            return redirect('auth/'.$provider);

        }
    }

    public function findOrCreateUser($input)
    {
        $checkIfExist = User::where('provider',$input['provider'])
            ->where('provider_id',$input['provider_id'])
            ->first();

        if($checkIfExist){
            return $checkIfExist;
        }

        return User::create($input);
    }
}
