<?php

use App\Http\Controllers\WelcomeController;

Route::middleware(['first', 'second'])->group(function () {
    Route::get('/', function () {
    // Uses first & second middleware...
});
Route::get('/user/profile', function () {
 // Uses first & second middleware...
 });
});

Route::domain('{account}.example.com')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
    //
    });
   });
   Route::middleware('auth')->group(function () {
   Route::get('/user', [UserController::class, 'index']);
   Route::get('/post', [PostController::class, 'index']);
   Route::get('/event', [EventController::class, 'index']);
   });

   Route::prefix('admin')->group(function () {
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/post', [PostController::class, 'index']);
    Route::get('/event', [EventController::class, 'index']);
   });

   Route::redirect('/here', '/there');

   Route::view('/welcome', 'welcome');
   Route::view('/welcome', 'welcome', ['name' =>'Taylor']);

   //Controller
   Route::get('/hello', [WelcomeController::class, 'hello']);
   Route::get('/index', [PageController::class, 'hello']);
   Route::get('/about/{nama}/nim/{nim}', [PageController::class, 'about']);
   Route::get('/articles/{id}', [PageController::class, 'article']);

   //Resource Controller
   Route::resource('photos', PhotoController::class);
   Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
   ]);
   Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
   ]);

   //view
   Route::get('/greeting', function () {
    return view('hello', ['name' => 'Dennis']);
    });

       //view dalam direktori
   Route::get('/greeting', function () {
        return view('blog.hello', ['name' => 'DennisParulian']);
    });

       //view dalam Controller
       Route::get('/greeting', [WelcomeController::class, 'greeting']);
    
    
   

   
