<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class User extends Controller
{
    public function index(){
        echo "user index";
        show_me_the_money('1000000');
        //dd(ROOTPATH);
        dd(session('admin'));
    }

    public function info(){
        echo "user info";
    }
}
