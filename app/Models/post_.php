<?php

namespace App\Models;



class post 
{
  private static $blog_post = [

    [
        "title" => "Judul post pertama",
        "slug" => "judul-post-pertama",
        "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab magnam illum possimus blanditiis, placeat, eveniet nam, voluptatibus dolores quisquam officia saepe repudiandae libero earum velit pariatur dicta eum? Repudiandae ad quisquam voluptatem sunt? Debitis non voluptas modi quaerat provident molestias culpa ex est neque sunt asperiores aspernatur voluptates corporis porro impedit dolor illum perferendis, ut cum, eos esse earum quas numquam tempore? Earum numquam veniam assumenda architecto ea maxime nam beatae eaque, deserunt molestias repellat saepe in quidem doloribus odit"
    ],

    [
        "title" => "Judul post kedua",
        "slug" => "judul-post-kedua",
        "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab magnam illum possimus blanditiis, placeat, eveniet nam, voluptatibus dolores quisquam officia saepe repudiandae libero earum velit pariatur dicta eum? Repudiandae ad quisquam voluptatem sunt? Debitis non voluptas modi quaerat provident molestias culpa ex est neque sunt asperiores aspernatur voluptates corporis porro impedit dolor illum perferendis, ut cum, eos esse earum quas numquam tempore? Earum numquam veniam assumenda architecto ea maxime nam beatae eaque, deserunt molestias repellat saepe in quidem doloribus odituu"
    ]
    ];

    public static function all()
    {
        return collect (self :: $blog_post);
    }

    public static function find ($slug){

    $post = static::all();
    //   $posts = [];

    //     foreach ($post as $p){
    //     if ($p["slug"] === $slug){
    //         $posts = $p;
    //     }
    // }

 return $post -> firstWhere('slug', $slug);

    }
}
