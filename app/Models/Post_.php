<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=[
        'title','content','slug','status'
    ];   
    private static $blog_post = [
        [
            "title" => "About",
            "slug" => "about",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi nemo omnis tempore dignissimos, distinctio, neque fugit aliquid aspernatur quam aperiam doloremque ducimus deleniti, dolorum quisquam qui est ipsam impedit labore!",
        ],
        [
            "title" => "Home",
            "slug" => "home",
            "body" => "Eligendi nemo omnis tempore dignissimos, distinctio, neque fugit aliquid aspernatur quam aperiam doloremque ducimus deleniti, dolorum quisquam qui est ipsam impedit labore!",
        ],
    ];

    public static function all()
    {
        return self::$blog_post;
    }
}
