<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
//only home and user routes are being used for this task purpose. Other routes are commented out for future use.
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\AboutController;
// use App\Http\Controllers\ServicesController;
// use App\Http\Controllers\DepartmentsController;
// use App\Http\Controllers\TeamController;
// use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [HomeController::class, 'index'])->name('home');

Route::get('/services', [HomeController::class, 'index'])->name('home');

Route::get('/departments', [HomeController::class, 'index'])->name('home');

Route::get('/team', [HomeController::class, 'index'])->name('home');

Route::get('/contact', [HomeController::class, 'index'])->name('home');

Route::get('/dropdown-1', function () {
    $users = DB::table('users')->get();

    return view('dropdown-1', compact('users'));
});

// One resource route handles all User CRUD actions (index, create, store, show, edit, update, destroy).
// Laravel automatically maps each HTTP method and URL to the appropriate controller method.
// Route::resource('users', UserController::class);

Route::resource('users', UserController::class);
