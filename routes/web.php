<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('page.about');
}) -> name("about");

Route::get('/contact', function () {
    return view('page.contact');
}) -> name("contact");
