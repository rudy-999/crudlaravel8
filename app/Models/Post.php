<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;
    // protected $fillable = ['title', 'exceprt', 'body ']; // hanya kolom yang ditentukan saja yg lain tidak masuk
    protected $guarded = ['id']; // hanyak kolom ini yg tidak bisa diinput yg lain bisa
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
