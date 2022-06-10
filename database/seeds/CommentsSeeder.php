<?php

use Illuminate\Database\Seeder;
use App\Comments;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Comments::class,10)->create();
    }
}
