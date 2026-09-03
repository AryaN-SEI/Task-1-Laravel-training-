<?php
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/services', [ServicesController::class, 'index'])->name('services');

Route::get('/departments', [DepartmentsController::class, 'index'])->name('departments');

Route::get('/team', [TeamController::class, 'index'])->name('team');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');