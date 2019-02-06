<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.pages.home');
    }

    public function sendMessage(Request $request)
    {
        var_dump($request->all());
    }
}
