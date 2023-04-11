<?php

use App\Models\Post;
use App\Models\Kategori;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LayananController;
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
    return view('landing', [
        "title" => "Home",
        'name' => 'Sekilas Tentang SMP Negeri 1 Jember'
    ]);
});

Route::get('/landing', [LandingPageController::class, 'index']);

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Naufal Mahdi",
        "email" => "naufalmahdi@gmail.com",
        "image" => "naufal.jpg"
    ]);
});

Route::get('/layanan', function () {
    return view('layanan', [
        "title" => "Layanan",
        "name" => "Naufal Mahdi",
        "email" => "naufalmahdi@gmail.com",
        "image" => "naufal.jpg"
    ]);
});


Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/kategories', function (Kategori $kategori) {
    return view('kategori', [
        'title' => $kategori->name,
        'posts' => $kategori->posts,
        'kategori' => $kategori->name
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
