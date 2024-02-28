<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleCOntroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class)->only(['index', 'show']);

Route::get('/hello', [WelcomeController::class, 'hello']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/articles/{id}', [ArticleController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);


Route::get('/world', function () {
    return 'World';
});

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'NIM  : 2241720225
    <br> Nama : Bagus Arnovario Wibowo';
});

// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya ' . $name;
// });

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

Route::get('/articles/{id}', function ($articlesId) {
    return 'Halaman Artikel dengan ID ' . $articlesId;
});

// Route::get('/user/{name?}', function ($name = null) {
//     return 'Nama saya ' . $name;
// });

// Route::get('/user/{name?}', function ($name = 'John') {
//     return 'Nama saya ' . $name;
// });

Route::get('/user/profile', function () {
    //
})->name('profile');

// Route::get('/greeting', function () {
//     return view('hello', ['name' => 'Arno']);
// });

// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Arno']);
// });

Route::get('/greeting', [WelcomeController::class,
'greeting']);