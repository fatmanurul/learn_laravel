<?php

namespace App\Models;


class Post 
{
 private static $blog_posts =  [
    [
    "title" => "Judul Tulisan Pertama",
    "slug" => "Judu-Tulisan-Pertama",
    "author" => "fatma nh",
    "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, corporis animi. Facilis aliquam nesciunt laboriosam ea amet commodi, voluptas distinctio ex adipisci nobis rerum earum deserunt necessitatibus error similique officia! Dolor, est, labore fuga nemo necessitatibus atque velit porro, impedit ipsa consequuntur optio. eveniet?"
    ],
    [
        "title" => "Juudul Post kedua",
        "slug" => "judul-post-kedua",
        "author" => "ariq",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, corporis animi. Facilis aliquam nesciunt laboriosam ea amet commodi, voluptas distinctio ex adipisci nobis rerum earum deserunt necessitatibus error similique officia! Dolor, est, labore fuga nemo"
        ]
    ];
    public static function all()
    {
    return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
      $posts = static::all();
        return $posts ->firstWhere('slug',$slug);
        }
}
 


