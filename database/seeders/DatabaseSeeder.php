<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //     'name'=> 'Ichsan Septriansyah',
        //     'email'=> 'ichsanseptriansyah23@gmail,com',
        //     'password'=> bcrypt(12345)

        // ]);

        // User::create([
        //     'name'=> 'Fadly',
        //     'email'=> 'fadly@gmail,com',
        //     'password'=> bcrypt(12345)

        // ]);

        User::factory(3)->create();

        Category::create([
            'name'=> 'Web Programing',
            'slug'=> 'web-programing'
        ]);

        Category::create([
            'name'=> 'Web Design',
            'slug'=> 'web-design'
        ]);

        Category::create([
            'name'=> 'Personal',
            'slug'=> 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title'=> 'Judul Pertama',
        //     'slug'=> 'judul-pertama',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, commodi?',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta aut a, repellat asperiores nisi atque, quas fuga repellendus cupiditate blanditiis exercitationem delectus deserunt? Autem, cum perferendis. Voluptas, quibusdam quod odio non neque delectus ex corrupti nulla officiis maxime ipsa blanditiis doloremque id ducimus molestiae, recusandae odit similique eum voluptates laboriosam!',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'title'=> 'Judul Kedua',
        //     'slug'=> 'judul-kedua',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, commodi?',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta aut a, repellat asperiores nisi atque, quas fuga repellendus cupiditate blanditiis exercitationem delectus deserunt? Autem, cum perferendis. Voluptas, quibusdam quod odio non neque delectus ex corrupti nulla officiis maxime ipsa blanditiis doloremque id ducimus molestiae, recusandae odit similique eum voluptates laboriosam!',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'title'=> 'Judul Ketiga',
        //     'slug'=> 'judul-ke-tiga',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, commodi?',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta aut a, repellat asperiores nisi atque, quas fuga repellendus cupiditate blanditiis exercitationem delectus deserunt? Autem, cum perferendis. Voluptas, quibusdam quod odio non neque delectus ex corrupti nulla officiis maxime ipsa blanditiis doloremque id ducimus molestiae, recusandae odit similique eum voluptates laboriosam!',
        //     'category_id'=>2,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'title'=> 'Judul Keempat',
        //     'slug'=> 'judul-keempat',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, commodi?',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta aut a, repellat asperiores nisi atque, quas fuga repellendus cupiditate blanditiis exercitationem delectus deserunt? Autem, cum perferendis. Voluptas, quibusdam quod odio non neque delectus ex corrupti nulla officiis maxime ipsa blanditiis doloremque id ducimus molestiae, recusandae odit similique eum voluptates laboriosam!',
        //     'category_id'=>2,
        //     'user_id'=>2
        // ]);



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
