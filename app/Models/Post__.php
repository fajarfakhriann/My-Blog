<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post

{
    private static $blog_posts = [
        [
            "title" => "Judul Tulisan Pertama",
            "author" => "fajar fakhrian",
            "slug" => "judul-tulisan-pertama",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem, necessitatibus. Id, consectetur quam soluta at quae aspernatur optio magnam assumenda explicabo neque totam molestiae odio sapiente veritatis nobis voluptate blanditiis. Sit autem reprehenderit, labore eum dolore, numquam esse itaque sunt, dolores neque dolor. Suscipit esse ab ut debitis quas eligendi quod ratione, illo consectetur ipsum deleniti provident iusto praesentium tenetur facere quo minima impedit ea est animi? Harum enim quas perferendis minus dolores veritatis laborum, maiores nulla commodi distinctio consectetur omnis incidunt nostrum ratione odit non, porro fugit sint saepe nesciunt quidem quis voluptate dolorem! Aspernatur sint doloribus eius repellat."
        ],
        [
            "title" => "Judul Tulisan Ke Dua",
            "author" => "fabiansky",
            "slug" => "judul-tulisan-ke-dua",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem, necessitatibus. Id, consectetur quam soluta at quae aspernatur optio magnam assumenda explicabo neque totam molestiae odio sapiente veritatis nobis voluptate blanditiis. Sit autem reprehenderit, labore eum dolore, numquam esse itaque sunt, dolores neque dolor. Suscipit esse ab ut debitis quas eligendi quod ratione, illo consectetur ipsum deleniti provident iusto praesentium tenetur facere quo minima impedit ea est animi? Harum enim quas perferendis minus dolores veritatis laborum, maiores nulla commodi distinctio consectetur omnis incidunt nostrum ratione odit non, porro fugit sint saepe nesciunt quidem quis voluptate dolorem! Aspernatur sint doloribus eius repellat."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
