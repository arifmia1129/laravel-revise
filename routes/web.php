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

Route::middleware(['auth', 'admin_auth'])->group(function () {
    Route::get('/profile', function () {
        return 'Profile page';
    });

    Route::get('dashboard', function () {
        return 'Dashboard page';
    });
});


Route::prefix('admin')->group(function () {
    Route::get('profile', function () {
        return 'Admin profile page here.';
    });

    Route::get('payment', function () {
        return 'Admin payment page here.';
    } );
});


Route::fallback(function() {
    return view('not_found');
});


// Route::get('welcome', function () {
//     return redirect('getting');
// });
Route::get('welcome', function () {
    return 'Welcome to VTTI';
});

Route::get('getting', function () {
    return 'Hi, welcome';
});

// Route::redirect('welcome', 'getting', 301);
Route::permanentRedirect('welcome', 'getting');


Route::view('institute', 'vtti', ['institute_name' => 'VTTI']);


Route::resource('articles', 'ArticleController');

// Route::get('articles', [ArticleController.class, 'index'])->name('articles.index');
// Route::get('articles/create', [ArticleController.class, 'create'])->name('articles.create');
// Route::post('articles/store', [ArticleController.class,  'store'])->name('articles.store');
// Route::get('articles/{article}', [ArticleController.class, 'show']->name('articles.show'));
// Route::put('articles/{article}', [ArticleController.class, 'update'])->name('articles.update');
// Route::patch('articles/{article}', [ArticleController.class, 'update']);
// Route::delete('articles/{article}', [ArticleController.class, 'destroy'])->name('articles.destroy');


Route::get('posts/{id}', function () {
    return 'This is post page';
})->where('id', '[0-9]+');


Route::get('posts/slug/{slug}', function () {
    return 'This is post page with slug';
})->where('slug', '[A-Za-z0-9]+');