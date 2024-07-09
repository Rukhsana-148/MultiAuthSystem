<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    //
    public function welcome(){
    if(Auth::id()){
        $role=Auth::user()->role;
    
        if($role==2){
            return view('user');
        }else{
            return view('admin');
        }
    }else{
        return view('welcome');
    }
    
    }
}
