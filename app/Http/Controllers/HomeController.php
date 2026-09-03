<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
{
    app()->setLocale('hi');

    return view('home', [
        'title' => __('messages.home_title')
    ]);
}
    }
