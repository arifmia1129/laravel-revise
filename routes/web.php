<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about/{name}/{email}', function ($name, $email) {
    return view('about', ["name" => $name, "email" => $email]);
});

Route::get('/contact', function () {
    return 'This is a contact page where we are working to improve. Stay tuned with us.';
});

Route::get('/institute-info/{institute_name}/{institute_address}', function ($institute_name, $institute_address) {
    return view('info', compact('institute_name', 'institute_address'));
});


Route::get('/student', function() {
    return view('student');
})->name('student');


Route::get('/teacher', function () {
    return view('teacher');
})->name('teacher');