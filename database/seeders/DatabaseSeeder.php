<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\user;
use App\Models\Post;
use App\Models\Category;

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
            'name' => 'fajarfakhrian',
            'username' => 'fajarfakh',
            'email' => 'fajarfakrian@gmail.com',
            'password' => bcrypt('12345')
        ]);
        // User::create([
        //     'name' => 'Doddy ferdiansyah',
        //     'email' => 'dodyferd@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Web Desaign',
            'slug' => 'web-desaign'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates itaque aliquid cumque.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus, id. Sequi vitae quam recusandae soluta eligendi et, incidunt laudantium iusto repellendus omnis facilis enim quasi inventore dolor eaque praesentium tempore doloribus minus. Reiciendis dolore perspiciatis odit corrupti animi, officia est recusandae aperiam blanditiis vel dignissimos saepe qui ipsa harum cupiditate, ipsam soluta eveniet ea, minus sit veritatis consequuntur dolor! Eligendi quod voluptatum voluptas aperiam magnam, fugiat deleniti minus consequuntur est labore, recusandae debitis enim corporis quo maiores molestiae aliquam perspiciatis accusantium suscipit repellat cum veritatis quis quibusdam nihil. Aperiam officiis consequatur consequuntur. Ducimus iste expedita veniam quam, aliquid labore dolorum?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates itaque aliquid cumque.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus, id. Sequi vitae quam recusandae soluta eligendi et, incidunt laudantium iusto repellendus omnis facilis enim quasi inventore dolor eaque praesentium tempore doloribus minus. Reiciendis dolore perspiciatis odit corrupti animi, officia est recusandae aperiam blanditiis vel dignissimos saepe qui ipsa harum cupiditate, ipsam soluta eveniet ea, minus sit veritatis consequuntur dolor! Eligendi quod voluptatum voluptas aperiam magnam, fugiat deleniti minus consequuntur est labore, recusandae debitis enim corporis quo maiores molestiae aliquam perspiciatis accusantium suscipit repellat cum veritatis quis quibusdam nihil. Aperiam officiis consequatur consequuntur. Ducimus iste expedita veniam quam, aliquid labore dolorum?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates itaque aliquid cumque.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus, id. Sequi vitae quam recusandae soluta eligendi et, incidunt laudantium iusto repellendus omnis facilis enim quasi inventore dolor eaque praesentium tempore doloribus minus. Reiciendis dolore perspiciatis odit corrupti animi, officia est recusandae aperiam blanditiis vel dignissimos saepe qui ipsa harum cupiditate, ipsam soluta eveniet ea, minus sit veritatis consequuntur dolor! Eligendi quod voluptatum voluptas aperiam magnam, fugiat deleniti minus consequuntur est labore, recusandae debitis enim corporis quo maiores molestiae aliquam perspiciatis accusantium suscipit repellat cum veritatis quis quibusdam nihil. Aperiam officiis consequatur consequuntur. Ducimus iste expedita veniam quam, aliquid labore dolorum?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates itaque aliquid cumque.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus, id. Sequi vitae quam recusandae soluta eligendi et, incidunt laudantium iusto repellendus omnis facilis enim quasi inventore dolor eaque praesentium tempore doloribus minus. Reiciendis dolore perspiciatis odit corrupti animi, officia est recusandae aperiam blanditiis vel dignissimos saepe qui ipsa harum cupiditate, ipsam soluta eveniet ea, minus sit veritatis consequuntur dolor! Eligendi quod voluptatum voluptas aperiam magnam, fugiat deleniti minus consequuntur est labore, recusandae debitis enim corporis quo maiores molestiae aliquam perspiciatis accusantium suscipit repellat cum veritatis quis quibusdam nihil. Aperiam officiis consequatur consequuntur. Ducimus iste expedita veniam quam, aliquid labore dolorum?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
