<?php

use Illuminate\Database\Seeder;
use App\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 100; $i++){
            $post = new Post();
            $post->name = 'name'.$i;
            $post->content = 'content1'.$i;
            $post->user_id = 1;
            $post->save();
        }
        // $this->call(UsersTableSeeder::class);
    }
}
