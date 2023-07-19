<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    function index()
    {
        return view('templates/index');
    }
    function profile()
    {
        return view('auth.profile');
    }
    function login()
    {
        return view('auth.login');
    }
    function auth_login(Request $request)
    {
        $Username = $request->Username;
        $Password = $request->Password;

        $user = UserModel::where('Username', $Username)->first();
        if (Hash::check($Password, $user->Password)) {
            session([
                'id' => $user->UserID,
                'Username'  => $Username
            ]);
        }
        $user->save();
    }
    function register()
    {
        return view('auth.register');
    }
    function auth_register(Request $request)
    {
        $user = new UserModel();
        $user->Username = $request->Username;
        $user->Password = Hash::make($request->Password);
        $user->save();
    }
}
