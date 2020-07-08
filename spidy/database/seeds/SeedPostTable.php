<?php

use App\Post;
use Illuminate\Database\Seeder;

class SeedPostTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        Post::truncate();
        factory(Post::class, 100)->create();
    }
}
