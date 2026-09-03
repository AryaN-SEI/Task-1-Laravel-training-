<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class DepartmentsController extends Controller
{
    public function index()
    {
        return Inertia::render('Departments');
    }
}