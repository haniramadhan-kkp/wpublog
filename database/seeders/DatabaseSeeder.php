<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Category;
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
        
        // User::create([
        //     'name' => 'Hani Ramadhan',
        //     'slug' => 'hani-ramadhan',
        //     'email' => 'ramadhan.hani@gmail.com',
        //     'password' => bcrypt('12345')

        // ]);

        // User::create([
        //     'name' => 'Dodi Setiawan',
        //     'slug' => 'dodi-setiawan',
        //     'email' => 'dodi@gmail.com',
        //     'password' => bcrypt('12345')

        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',

        ]);

        Category::create([
            'name' => 'Web Desain',
            'slug' => 'web-desain',

        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',

        ]);

        Post::factory(20)->create();

        
    }
}
