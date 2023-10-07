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
    function about(){
        return view('pages.about');
    }
}
