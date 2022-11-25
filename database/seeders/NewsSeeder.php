<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\User;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news = [
            [
                'title'=>'news 1 ',
                'body'=>'this is the description of our fist news',
            ],
            [
                'title'=>'news 2 ',
                'body'=>'this is the description of our second news',
            ],
            [
                'title'=>'news 3 ',
                'body'=>'this is the description of our third news',
            ],
        ];


        foreach ($news as $key => $new) {
            News::create($new);
        }
    }
}
