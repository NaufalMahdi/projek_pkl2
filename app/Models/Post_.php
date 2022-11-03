<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
        
            "title" => "Judul Post Pertama",
            "slug" => "judul-posts-pertama",
            "author" => "Naufal Mahdi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, est similique consequuntur, et impedit qui quasi sapiente nemo sequi tempore optio recusandae. Eaque optio consequatur, nihil animi hic rerum illum?"
            
         ],
        
         [
            
            "title" => "Judul Post Kedua",
            "slug" => "judul-posts-kedua",
            "author" => "Naufal Mahdi",
            "body" => "Lorem ipsum sdolor sit amet consectetur adipisicing elit. Laboriosam, est similique consequuntur, et impedit qui quasi sapiente nemo sequi tempore optio recusandae. Eaque optio consequatur, nihil animi hic rerum illum?"
            
         ],
         
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
 