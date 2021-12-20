<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Hani Ramadhan",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis quisquam ratione vitae provident minus, et similique veniam rerum assumenda quam sequi, harum repellendus, inventore eaque corporis totam odio adipisci. Consequuntur debitis incidunt dolorum tempore atque eos temporibus, vel voluptate minima fugiat, non omnis doloremque consequatur officiis aliquid voluptatem alias voluptas provident distinctio fuga aliquam culpa. Vitae saepe excepturi nesciunt fuga delectus veritatis aperiam soluta, quia quisquam reprehenderit voluptate aspernatur tempore placeat ut officia? Modi magnam, tempora suscipit molestiae enim necessitatibus?"
        ],

        [
            "title" => "Judul Post Kedua",
            "slug"  => "judul-post-kedua",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id eligendi maiores laborum voluptate officia sunt voluptas illum exercitationem beatae dolorem. Corporis ipsam eaque itaque ducimus dicta doloremque. Corporis labore quod esse asperiores, ullam iure facere rerum laboriosam error suscipit numquam quo voluptatum assumenda porro mollitia molestiae modi ducimus aliquid corrupti eum quia! Tempora, quia soluta laborum itaque quo totam provident cupiditate eum obcaecati ratione praesentium, in facilis dicta harum quidem numquam quasi nostrum mollitia hic expedita quos dolorem quaerat? Iure, unde. Nemo temporibus iste eligendi magnam, voluptates inventore possimus dicta facere cumque. Deserunt fuga id sint libero provident ducimus omnis."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug',$slug);
    }
}
