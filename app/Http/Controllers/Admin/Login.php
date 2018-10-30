<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Login extends Controller
{
    public function index(){
        echo "go login";
        dd(session('admin'));
    }

    public function login(){

        $info = [
            'id'=>1,
            'name'=>'admin',
            'nickname'=>'超级管理员',
        ];
        session(['admin'=>$info]);
        echo "is login!";
    }

}
