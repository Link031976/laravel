<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Post::factory(1)->create(); //твоти 1 запис до постів
        User::factory(10)->create(); // сворити 10 користувачів


        // \App\Models\User::factory(10)->create();
    }
}
