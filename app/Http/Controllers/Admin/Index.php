<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Index extends Controller
{
    public function index(){
        echo "index";
    }

    public function login(){
       // echo "login";
        return view ("admin.login");
    }
}
