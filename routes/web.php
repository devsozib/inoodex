<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.AboutUs');
})->name('about');

Route::get('/service', function () {
    return view('pages.Service');
})->name('service');

Route::get('/project', function () {
    return view('pages.project');
})->name('project');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
