<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function getLogin(){
        return view('admin.auth.login');
    }
    public function postLogin(){
        return ('login');
    }
    public function getLogout(){

    }
    //register side
    public function getRegister(){
        return view('admin.auth.register');
    }

}
