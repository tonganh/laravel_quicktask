<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     [
        //         'username' => 'anh_tn',
        //         'first_name' => 'Tong',
        //         'last_name' => 'Anh',
        //         'email' => 'anh.tndev40@gmail.com',
        //         'is_admin' => '1',
        //         'is_active' => '0',
        //         'password' => Hash::make('123456'),
        //     ]
        // ]);
        User::factory()->count(30)->create();
    }
}
