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
        
        User::create([
            'name' => 'Ahlun Nazar Bin Kasmin S.Kom.',
            'username' => 'Ahlunnazar22',
            'email' => 'ahlun.nzr22@gmail.com',
            'password' => bcrypt('ahlun123')
        ]);
        User::create([
            'name' => 'Rizko Adrian Azka S.Kom.',
            'username' => 'rizko',
            'email' => 'rizko.azka@gmail.com',
            'password' => bcrypt('rizko123')
        ]);
        User::create([
            'name' => 'Harrys Ananda Pratama S.Kom.',
            'username' => 'rencus',
            'email' => 'rencus@gmail.com',
            'password' => bcrypt('rencus123')
        ]);
        User::create([
            'name' => 'Barokah Aji Prasetyo',
            'username' => 'ajibar',
            'email' => 'ajibarokah@gmail.com',
            'password' => bcrypt('ajibar123')
        ]);
        User::create([
            'name' => 'M. Qurais Sihab',
            'username' => 'qurais',
            'email' => 'qurais@gmail.com',
            'password' => bcrypt('qurais123')
        ]);
        // User::factory(3)->create();
        Category::create([
            'name' => 'Traveller',
            'slug' => 'traveller'
        ]);
        Category::create([
            'name' => 'Holliday',
            'slug' => 'holliday'
        ]);
        Category::create([
            'name' => 'Touring',
            'slug' => 'touring'
        ]);
        Category::create([
            'name' => 'Trip',
            'slug' => 'trip'
        ]);
        Category::create([
            'name' => 'Nature',
            'slug' => 'nature'
        ]);
        Category::create([
            'name' => 'Destination',
            'slug' => 'destination'
        ]);
        Post::factory(2)->create();
        // Post::create([
        //     'title' => 'Mau jadi Traveller?',
        //     'slug' => 'mau-jadi-traveller',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam, maxime.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem natus soluta iure consectetur ipsa, ducimus ex vero suscipit deleniti, maiores quia libero aperiam alias voluptatibus amet et fugit atque aspernatur rerum sint facilis. Ratione totam aliquid corrupti enim corporis a eius doloremque incidunt unde? Odit vitae nesciunt dolor voluptate voluptatem eveniet reprehenderit pariatur accusamus similique eius porro nulla iusto vel aperiam soluta, distinctio odio quia officiis facilis modi possimus dolorem animi deleniti numquam. Adipisci numquam dolorum obcaecati, omnis amet error cumque dolor, debitis ad molestiae repudiandae eveniet sint, sunt possimus? Molestias voluptatibus fugit minus possimus sequi, nobis deleniti ipsum voluptate!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Sudah Traveller kemana aja nih ?',
        //     'slug' => 'sudah-traveller-kemana-aja-nih',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam, maxime.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem natus soluta iure consectetur ipsa, ducimus ex vero suscipit deleniti, maiores quia libero aperiam alias voluptatibus amet et fugit atque aspernatur rerum sint facilis. Ratione totam aliquid corrupti enim corporis a eius doloremque incidunt unde? Odit vitae nesciunt dolor voluptate voluptatem eveniet reprehenderit pariatur accusamus similique eius porro nulla iusto vel aperiam soluta, distinctio odio quia officiis facilis modi possimus dolorem animi deleniti numquam. Adipisci numquam dolorum obcaecati, omnis amet error cumque dolor, debitis ad molestiae repudiandae eveniet sint, sunt possimus? Molestias voluptatibus fugit minus possimus sequi, nobis deleniti ipsum voluptate!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Waktunya Hollidday!',
        //     'slug' => 'holliday',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam, maxime.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem natus soluta iure consectetur ipsa, ducimus ex vero suscipit deleniti, maiores quia libero aperiam alias voluptatibus amet et fugit atque aspernatur rerum sint facilis. Ratione totam aliquid corrupti enim corporis a eius doloremque incidunt unde? Odit vitae nesciunt dolor voluptate voluptatem eveniet reprehenderit pariatur accusamus similique eius porro nulla iusto vel aperiam soluta, distinctio odio quia officiis facilis modi possimus dolorem animi deleniti numquam. Adipisci numquam dolorum obcaecati, omnis amet error cumque dolor, debitis ad molestiae repudiandae eveniet sint, sunt possimus? Molestias voluptatibus fugit minus possimus sequi, nobis deleniti ipsum voluptate!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Open Touring raja ampat nih',
        //     'slug' => 'touring',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam, maxime.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem natus soluta iure consectetur ipsa, ducimus ex vero suscipit deleniti, maiores quia libero aperiam alias voluptatibus amet et fugit atque aspernatur rerum sint facilis. Ratione totam aliquid corrupti enim corporis a eius doloremque incidunt unde? Odit vitae nesciunt dolor voluptate voluptatem eveniet reprehenderit pariatur accusamus similique eius porro nulla iusto vel aperiam soluta, distinctio odio quia officiis facilis modi possimus dolorem animi deleniti numquam. Adipisci numquam dolorum obcaecati, omnis amet error cumque dolor, debitis ad molestiae repudiandae eveniet sint, sunt possimus? Molestias voluptatibus fugit minus possimus sequi, nobis deleniti ipsum voluptate!',
        //     'category_id' => 3,
        //     'user_id' => 2
        // ]);

    }
}
