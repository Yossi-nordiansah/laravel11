<?php

use App\Models\Post;
use Illuminate\Support\Arr;
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
    return view('home', ['title' => 'Home']);
});
Route::get('/about', function () {
    return view('about', ['title' => 'Yossi Nordiansah']);
});
Route::get('/blog', function () {
    return view('blog', ['title' => 'My Blog', 'post' => Post::all()]);
});

Route::get("/about/{id}", function ($slug) {
    $post = Post::detail($slug);
    return view('detail', ['title' => "Detail Article", "post" => $post]);
});

Route::get('/contact', function () {
    return view('contact');
});
