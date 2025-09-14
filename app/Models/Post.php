<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{

    public static function all()
    {

        return [
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
    }

    public static function detail($slug){
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if(!$post){
            abort(404);
        }

        return $post;
    }
}
