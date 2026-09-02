<?php
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

Route::get('/about', function () {
    return Inertia::render('About');
})->name('about');

Route::get('/services', function () {
    return Inertia::render('Services');
})->name('services');

Route::get('/departments', function () {
    return Inertia::render('Departments');
})->name('departments');

Route::get('/team', function () {
    return Inertia::render('Team');
})->name('team');

Route::get('/contact', function () {
    return Inertia::render('Contact');
})->name('contact');