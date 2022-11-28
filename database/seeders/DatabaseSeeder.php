<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Post;
use \App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {       

      User::create([
         "name" => "Ariansyah",
         "username" => "ariansyah",
         "email" => "arian@gmail.com",
         'password' => bcrypt('arian')
      ]);

         Category::create([
            "name" => "Programming",
            "slug" => "programming"
         ]);

         Category::create([
            "name" => "Development",
            "slug" => "development"
         ]);
         Category::create([
            "name" => "Hosting",
            "slug" => "Hosting"
         ]);
         Category::create([
            "name" => "Video",
            "slug" => "video"
         ]);
         Category::create([
            "name" => "SEO",
            "slug" => "seo"
         ]);
         Category::create([
            "name" => "Feedback",
            "slug" => "feedback"
         ]);
         Category::create([
            "name" => "Email",
            "slug" => "email"
         ]);
         Category::create([
            "name" => "Editor",
            "slug" => "editor"
         ]);

         User::factory(3)->create();
         Post::factory(30)->create();

    }
}
