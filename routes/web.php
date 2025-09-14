<?php

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
    return view('blog', ['title' => 'My Blog', 'post' => [
        [
            "id" => 1,
            "slug" => "judul-artikel-1",
            "title" => 'Judul Artikel 1',
            "author" => "Yossi Nordiansah",
            "body" => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea delectus iure excepturi omnis, est accusamus cupiditate, recusandae repellat perspiciatis, possimus reprehenderit! Neque, fugiat vel facere dolore doloremque illum recusandae vero corporis, libero quidem itaque laborum soluta, dignissimos officia veniam voluptate id at. Dolor delectus obcaecati laudantium fugiat mollitia sed facilis.'
        ],
        [
            "id" => 2,
            "slug" => "judul-artikel-2",
            "title" => 'Judul Artikel 2',
            "author" => "Yossi Nordiansah",
            "body" => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea delectus iure excepturi omnis, est accusamus cupiditate, recusandae repellat perspiciatis, possimus reprehenderit! Neque, fugiat vel facere dolore doloremque illum recusandae vero corporis, libero quidem itaque laborum soluta, dignissimos officia veniam voluptate id at. Dolor delectus obcaecati laudantium fugiat mollitia sed facilis.'
        ],
    ]]);
});

Route::get("/about/{id}", function ($slug) {
    $blog = [
        [
            "id" => 1,
            "slug" => "judul-artikel-1",
            "title" => 'Judul Artikel 1',
            "author" => "Yossi Nordiansah",
            "body" => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea delectus iure excepturi omnis, est accusamus cupiditate, recusandae repellat perspiciatis, possimus reprehenderit! Neque, fugiat vel facere dolore doloremque illum recusandae vero corporis, libero quidem itaque laborum soluta, dignissimos officia veniam voluptate id at. Dolor delectus obcaecati laudantium fugiat mollitia sed facilis.'
        ],
        [
            "id" => 2,
            "slug" => "judul-artikel-2",
            "title" => 'Judul Artikel 2',
            "author" => "Yossi Nordiansah",
            "body" => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea delectus iure excepturi omnis, est accusamus cupiditate, recusandae repellat perspiciatis, possimus reprehenderit! Neque, fugiat vel facere dolore doloremque illum recusandae vero corporis, libero quidem itaque laborum soluta, dignissimos officia veniam voluptate id at. Dolor delectus obcaecati laudantium fugiat mollitia sed facilis.'
        ],
    ];

    $post = Arr::first($blog, function ($blog) use ($slug) {
        return $blog['slug'] == $slug;
    });

    return view('detail', ['title' => "Detail Article", "post" => $post]);
});

Route::get('/contact', function () {
    return view('contact');
});
