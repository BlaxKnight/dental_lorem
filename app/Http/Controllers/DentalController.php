<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
