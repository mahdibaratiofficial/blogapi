<?php

use App\Category;
use App\Posts;
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
        $this->call([
            PostsSeeder::class,
            CommentsSeeder::class,
            UserSeeder::class,
            CategorySeeder::class
        ]);
    }
}
