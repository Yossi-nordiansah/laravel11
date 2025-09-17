<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
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

Route::get("/detail/{post:slug}", function (Post $post) {
    return view('detail', ['title' => "Detail Article", "post" => $post]);
});

Route::get("/authors/{user}", function (User $user) {
    return view('blog', ['title' => "Articles By " . $user->name, "post" => $user->post]);
});

Route::get("/category/{category:slug}", function (Category $category) {
    // dd($category->post);
    return view('blog', ['title' => "Category in " . $category->name, "post" => $category->post]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/check-db', function () {
    return DB::connection()->getDatabaseName();
});
