<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        app()->setLocale('hi');

        return Inertia::render('Home', [
            'title' => __('messages.home_title')
        ]);
    }
}