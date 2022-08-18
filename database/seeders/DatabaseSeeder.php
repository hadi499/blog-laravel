<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name'=> 'Hadi Purnomo',
        //     'username' => 'hadi',
        //     'email' => 'hadi@gmail.com',
        //     'password' => bcrypt('password')
        // ]);
        
        // User::factory(3)->create();

        // Post::factory(15)->create();

        

        // Category::create([
        //     'name' => 'Web Programming',
        //     'slug' => 'web-prograaming'
        // ]);

        // Category::create([
        //     'name' => 'Backend Developer',
        //     'slug' => 'backend-developer'
        // ]);

        // Category::create([
        //     'name' => 'Pentester',
        //     'slug' => 'pentester'
        // ]);


        Post::create([
            'title' => 'tes latest2',
            'slug' => 'tes-latest2',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam enim aliquid vel nostrum sunt fugit voluptates similique, iure libero animi, porro accusamus. Debitis nobis, odio libero aut consequatur cupiditate. Veritatis deleniti repellendus labore quam, fugit amet ab velit autem perferendis.',
            'category_id' => 1,
            'user_id' => 1
        ]);
    }
}
