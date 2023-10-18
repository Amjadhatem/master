<?php

use Illuminate\Support\Facades\Route;
////////////////////////////////////////////////

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Team', function () {
    return view('team');
});

Route::get('/Login', function () {
    return view('logIn');
});

Route::get('/SignUp', function () {
    return view('signUp');
});

Route::get('/ContactUs', function () {
    return view('ContactUs');
});

Route::get('/admin', function () {
    return view('adminDashBoard');
});

Route::get('/admin_Services', function () {
    return view('services_admin');
});

Route::get('/admin_Blogs', function () {
    return view('blogs_admin');
});

Route::get('/admin_Team', function () {
    return view('team_admin');
});

Route::get('/admin_Users', function () {
    return view('users_admin');
});

Route::get('/admin_Profile', function () {
    return view('profile_admin');
});

Route::get('/Reservations', function () {
    return view('Reservations');
});

////////////////////////////////////////////////
