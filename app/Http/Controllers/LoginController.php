<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    //
    public function register(Request $request){

        if($request->password==$request->password1){
            
            $request['password']=Hash::make($request['password']);
            $new=request()->except('_token','password1');
            User::Insert($new);
            $aut['user']=User::where('email',$request['email'])
            ->first();
            $va=$aut['user']->id;
            $user=User::find($va);

            Auth::login($user);

            return view('home');

        }else{
            return redirect(route('registro'));
        }
    }

    public function login(Request $request){
        $log=request()->except('_token');
        $si=User::where('email',$log['email'])
        ->where('estatus','1')
        ->first();
        $credentials = [
            'email' => $si['email'],
            'password' => $si['password'],
        ];
        $remember=($request->has('remember_token') ? true : false);
        if(Auth::attempt($credentials,$remember)){
            $request->session()->regenerate();
            return redirect()->intended(route('home'));
        }else{
            return redirect('login');
        }


    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
