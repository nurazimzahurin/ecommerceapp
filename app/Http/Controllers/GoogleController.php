<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
          
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        try {
        
            $user = Socialite::driver('google')->stateless()->user();
         
            $finduser = User::where('email', $user->email)->first();
         
            if($finduser){
         
                Auth::login($finduser);
        
                return redirect()->intended();
         
            }else{
                $newUser = User::updateOrCreate(
                    [
                        'email' => $user->email
                    ],
                    [
                        'name' => $user->name,
                        'password' => encrypt('123456'),
                        'avatar' => $user->avatar
                    ]
                );

                Auth::login($newUser);
        
                return redirect()->intended();
            }
        
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();
        
        return redirect()->intended();
    }
}
