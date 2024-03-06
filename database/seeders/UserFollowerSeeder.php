<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserFollowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('followers')->insert([
            [
                'user_id'=>1,
                'following_id'=>2
            ],
            [
                'user_id'=>2,
                'following_id'=>1
            ],
        ]);
    }
}
