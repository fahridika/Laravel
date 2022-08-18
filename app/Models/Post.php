<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
class Post
{
    private static $blog_posts = [
        [
            'title' =>  'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Anjas W',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Nisl tincidunt eget nullam non. Quis hendrer it dolor magna eget est lorem ipsum dolor sit.'
            
            ],
            [
                'title' =>  'Judul Post Kedua',
                'slug' => 'judul-post-kedua',
                'author' => 'Fany I P',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Nisl tincidunt eget nullam non. Quis hendrer it dolor magna eget est lorem ipsum dolor sit.'
                
            ]
            ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        // $posts = self::$blog_posts;
        $posts = static::all();
        return $posts -> firstWhere('slug', $slug);
        // $post = [];
        // foreach ($posts as $p){
        //     if ($p['slug'] === $slug)
        //     {
        //         $post = $p;
        //     }
        // }
        
    }
    
}
