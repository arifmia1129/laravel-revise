<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BloodDonorController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\TeacherController;
use App\Http\Middleware\RouteMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index']);


Route::resource('teachers', TeacherController::class);

Route::get('/blog', BlogController::class);


// Route::get('/{Arif}', [HomeController::class,'info']);

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


// Route::resource('articles', 'ArticleController');

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


Route::get('student/{id}', function () {
    return 'This is student page';
})->name('student');


Route::get('admin', function () {
    return view('admin.index');
});

Route::get('admin/manage-user', function () {
    return view('admin.manage-user.index');
});


Route::get('getting-data', function () {
    // return view('getting-data', ['name'=> 'Md. Arif', 'age'=>23]);
    // return view('getting-data')->with('name', 'Md. Arif')->with('age', 23);
    // return view('getting-data')->with(['name'=>'Md. Arif', 'age'=>23]);

    $name = 'Md. Arif';
    $age = 23;

    return view('getting-data', compact(['name', 'age']));
});


Route::get('products', function () {


    $products = Cache::remember('products', now()->addMinutes(10), function () {
        return [
            'p1' => 'Product 1',
            'p2' => 'Product 2',
            'p3' => 'Product 3',
        ];
    });

    return view('products', compact('products'));
});

Route::get('result/{marks}', function ($marks){

    return view('print_result', compact('marks'));
});

Route::get('passport-status/{status}', function ($status){
    return view('passport_status', compact('status'));
});


Route::get('raw-php', function () {
    return view('raw_php');
});


Route::get('dashboard', function () {
    return view('dashboard.app');
});

Route::get('dashboard/home', function () {
    return view('dashboard.home');
});

Route::get('dashboard/users', function () {
    return view('dashboard.users');
});

Route::get('dashboard/products', function () {
    return view('dashboard.products');});


Route::get('blood-donor', [BloodDonorController::class, 'index']);

Route::get('blood-donor/create', [BloodDonorController::class, 'create']);

Route::post('blood-donor/store', [BloodDonorController::class, 'store'])->name('blood-donor-store');


Route::get('output/page', function (){
    // return 'This is output page';
    // return view('output');
    // $data = [
    //     'statusCode'=>201,
    //     'success'=>true,
    //     'message'=>'Successfully created a new blood donor',
    //     'data'=>[
    //         'name'=>'Md. Arif',
    //         'email'=>'bqJZf@example.com',]
    // ];

    // return response()->json($data, 201);

    return redirect('http://www.google.com');

});


Route::get('service', function (){
    return 'This is service page';
})->middleware(RouteMiddleware::class);






Route::group(['middleware'=>'new-middleware-group'], function () {
    Route::get('family', [FamilyController::class, 'index']);

Route::get('family/{id}', [FamilyController::class, 'show', ]);
});


Route::get('store-session-data', function (Request $request){
    $request->session()->put('username', 'mdarifmia');
    $request->session()->put('email', 'mdarifmia@gmail.com');

    // $request->session()->flash('key', 'random_key_here');

    session([
        'name'=>'Md Arif Mia',
        // 'phone'=>'123-456-888'
    ]);
});

Route::get('retrieve-session-data', function (Request $request){
    dd(session()->all());

    // echo session()->get('username');
    // echo '<br>';
    // echo session()->get('email');

    echo session('username');
    echo '<br>';
    echo session('email');

    echo '<br>';

    if($request->session()->has('phone')) {
        echo session('phone');
    }else {
        echo 'Phone number not found';
    }
});


Route::get('delete-session-data/{key}', function (Request $request, $key){
    // $request->session()->forget($key);

    $request->session()->flush();

    dd(session()->all());
});

Route::get('support', [SupportController::class, 'index']);