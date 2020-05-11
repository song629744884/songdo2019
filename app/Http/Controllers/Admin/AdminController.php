<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    function login(){
        return view('admin/login');
    }

    function index(){
        return view('admin/index');
    }

}
