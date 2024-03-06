<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TweetSeedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tweets')->insert([
            [
                'user_id'=>1,
                'body'=>'cho mình hỏi mình dùng redis apdater gõ PUBSUB CHANNELS * thì có 2 channel là socket.io'
            ],
            [
                'user_id'=>2,
                'body'=>'sao mình chạy lệnh composer require spatie/laravel-responsecache nó báo command not found nhỉ'
            ],
            [
                'user_id'=>3,
                'body'=>'Rất hay, bài của bạn giúp mình mở mang kiến thức về Laravel nhiều hơn. Cảm ơn chủ thớt đã chia sẻ'
            ],
        ]);
    }
}
