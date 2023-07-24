<?php

namespace App\Http\Controllers;

use App\Models\DivisionModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    function index()
    {
        if(empty(session()->get('id')))
            return redirect()->to('login');
        else
            return view('templates/index');
    }
    function profile()
    {
        $division = DivisionModel::all();
        $user = UserModel::where('UserID', session()->get('id'))->first();
        return view('auth.profile', compact('user', 'division'));
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
            $request->session()->put('id',$user->UserID);
            $request->session()->put('Username',$user->Username);
            $request->session()->put('UserLevel',$user->UserLevel);            
            $request->session()->put('UserEmail',$user->UserEmail);            
        }
        $user->save();
        return redirect()->to('/');
    }
    function register()
    {
        return view('auth.register');
    }
    function logout()
    {
        session()->forget('id');
        session()->forget('Username');
        session()->forget('UserLevel');
        session()->forget('UserEmail');
        return redirect()->to('/');
    }
    
    function auth_register(Request $request)
    {
        $user = new UserModel();
        $user->Username = $request->Username;
        $user->UserEmail = $request->email;
        $user->Password = Hash::make($request->Password);
        $user->save();
        return redirect()->to('/login');
    }
}
