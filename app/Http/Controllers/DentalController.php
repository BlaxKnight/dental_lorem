<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DentalController extends Controller
{
    function index(){
        return view("pages.index");
    }
    function articles(){
        return view('pages.articles');
    }
    function login(){
        return view('pages.login');
    }
    function dashboard(){
        return view('pages.dashboard');
    }
    function about(){
        return view('pages.about');
    }
    function loginPost(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('username', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('pages.dashboard'));
        }
        return redirect(route('login'))->with("error", "Login details are not valid");
    }
    /*function registerPost(Request $request){
        ...
    }*/
    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
