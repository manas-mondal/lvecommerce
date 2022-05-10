<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $r){

        $user= User::where(['email'=>$r->email])->first();

        if(!$user || !Hash::check($r->password,$user->password)){
            return "Username or password is not matched";
        }else{
            $r->session()->put('user',$user);
            return redirect('/');
        }
    }
}
