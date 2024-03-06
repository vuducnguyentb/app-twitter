<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arrays = [
            [
                'username' => 'nguyenvdtb93',
                'name'=>'Nguyên',
                'email'=>'nguyenvdtb93@gmail.com',
                'password'=>bcrypt('123456$q'),
            ],
            [
                'username' => 'cuongnd',
                'name'=>'Cường',
                'email'=>'cuongnd@gmail.com',
                'password'=>bcrypt('123456$q'),
            ],
            [
                'username' => 'nguyenvd',
                'name'=>'Vũ Vũ',
                'email'=>'nguyenvd@tcv.vn',
                'password'=>bcrypt('123456$q'),
            ],
            [
                'username' => 'kienlv',
                'name'=>'Kiên Nờ Vê',
                'email'=>'kienlv@tcv.vn',
                'password'=>bcrypt('123456$q'),
            ],
            [
                'username' => 'hanhsino',
                'name'=>'Hạnh',
                'email'=>'hanhsino@tcv.vn',
                'password'=>bcrypt('123456$q'),
            ],
        ];
        foreach ($arrays as $array){
            User::create($array);
        }
    }
}
