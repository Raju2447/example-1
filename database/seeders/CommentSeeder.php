<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $comments = [
            [
                'news_id'=>1,
                'body'=>'i like this news',
            ],
            [
                'news_id'=>1,
                'body'=>'i have no opinion about that',
            ],
           [
                'news_id'=>1,
                'body'=>'are you kidding me ?',
            ],
           [
                'news_id'=>2,
                'body'=>'this is so true',
            ],
           [
                'news_id'=>2,
                'body'=>'trolololo	',
            ],
           [
                'news_id'=>3,
                'body'=>'luke i am your father	',
            ],

        ];


        foreach ($comments as $key => $comment) {
            Comment::create($comment);
        }
    }
}
