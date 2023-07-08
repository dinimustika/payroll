<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        return view('templates/index');
    }
    function profile() {
        return view('auth.profile');
    }
    function login() {
        return view('auth.login');
    }
}
