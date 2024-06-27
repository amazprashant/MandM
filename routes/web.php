<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/contact-us', function () {
    return view('contact_us');
});

Route::get('/about-us', function () {
    return view('about_us');
});

Route::get('/our-services', function () {
    return view('our_services');
});

Route::get('/our-process', function () {
    return view('our_process');
});

Route::get('/our-team', function () {
    return view('our_team');
});
Route::get('/team-details', function () {
    return view('team_details');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/404', function () {
    return view('404');
});
