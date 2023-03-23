<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Post::factory(50)->create();
        // Post::create([
        //     'title' => 'Judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'exceprt' => 'Judul ketiga',
        //     'body' => 'isi body Judul ketiga',
        // ]);
        // User::create([
        //     'name' => 'test laravel',
        //     'email' => 'test@email.com',
        //     'password' => bcrypt('1234'),
        // ]);
    }
}
