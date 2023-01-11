<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public static function principal() {
        return view('index');
    }

    public static function sobre() {
        return view('sobre');
    }
}
