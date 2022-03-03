<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Admin;
use App\Auth;
class AuthController extends Controller
{
    //
    public function login(){


        return view('admin.auth.login');
    }
    public function doLogin(Request $request){
$data = $request->validate([
'email' => 'required|email|max:191' ,
'password' => 'required|string' ,

]);
if(!auth()->guard('admin')->attempt([ 'email' => $data['email'] , 'password' => $data['password'] ]))
{
return back();

}
else
{

    return redirect(route('admin.home'));
}

    }

    public function logout(){

        auth()->guard('admin')->logout();
       
    return redirect(route('admin.login')); 
    }

    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('github')->user();
 $email = $user->email ;
 $db_user = Admin::where('email' , '=' , $email)->first();
        // $user->token;
        if($db_user == null){

            $register = Admin::create([
'name' => $user->name,

'email' => $user->email ,

'password' => Hash::make('123456') ,
'oauth_token' => $user->token,

            ]);
            Auth::login($register);
        }

        else
        {

            Auth::login($db_user);     
        }
        return redirect(url('/admin'));
    }
}
