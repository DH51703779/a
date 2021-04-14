<?php
  
namespace App\Http\Controllers;
  
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
session_start();
  
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
    
            $user = Socialite::driver('google')->user();
     
            $finduser = User::where('email', $user->email)->first();
     
            if($finduser){
     
                Session::put('user_name',$finduser->name);
                Session::put('user_id',$finduser->id);
                return redirect::to('/');
     
            }else{  
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => encrypt('Ngan')
                ]);
    
                Auth::login($newUser);
                Session::put('user_name',$user->name);
                Session::put('user_id',$user->id);
                return redirect::to('/');
            }
    
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
/// facebook 
    public function facebookSignin()
    {
        try {
    
            $user = Socialite::driver('facebook')->user();
            $facebookId = User::where('facebook_id', $user->id)->first();
     
            if($facebookId){
                Auth::login($facebookId);
                Session::put('user_name',$facebookId->name);
                Session::put('user_id',$facebookId->id);
                return redirect('/');
            }else{
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'facebook_id' => $user->id,
                    'password' => encrypt('Ngan')
                ]);
    
                Auth::login($createUser);
                Session::put('user_name',$user->name);
                Session::put('user_id',$user->id);
                return redirect('/');
            }
    
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }
}