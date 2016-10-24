<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(PostSeeder::class);
    }
}


class PostSeeder extends Seeder {
    public function run()
    {
        DB::table('posts')->delete();
        Post::create([
            'title' => 'First Post',
            'slug' => 'first-post',
            'excerpt' => '<b>First Post body</b>',
            'content' => '<b>Content First Post body</b>',
            'published' => true,
            'published_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);


        Post::create([
            'title' => '2 Post',
            'slug' => '2-post',
            'excerpt' => '<b>2 Post body</b>',
            'content' => '<b>Content 2 Post body</b>',
            'published' => false,
            'published_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        Post::create([
            'title' => '4 Post',
            'slug' => '4-post',
            'excerpt' => '<b>4 Post body</b>',
            'content' => '<b>Content 4 Post body</b>',
            'published' => true,
            'published_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);



        Post::create([
            'title' => '3 Post',
            'slug' => '3-post',
            'excerpt' => '<b>3 Post body</b>',
            'content' => '<b>Content 3 Post body</b>',
            'published' => true,
            'published_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

    }
}
