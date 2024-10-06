<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 1,
                'level_id' => 1,
                'username' => 'admin',
                'nama' => 'Administrator',
                'password' => Hash::make('12345'), //Class untuk mengenkripsikan/ hash password
            ],
            [
                'user_id' => 2,
                'level_id' => 2,
                'username' => 'manager',
                'nama' => 'Manager',
                'password' => Hash::make('12345'), //Class untuk mengenkripsikan/ hash password
            ],
            [
                'user_id' => 3,
                'level_id' => 3,
                'username' => 'staff',
                'nama' => 'Staff/Kasir',
                'password' => Hash::make('12345'), //Class untuk mengenkripsikan/ hash password
            ],

            [
                'user_id' => 5,
                'level_id' => 3,
                'username' => 'customer-1',
                'nama' => 'Pelanggan Pertama',
                'password' => Hash::make('12345'), //Class untuk mengenkripsikan/ hash password
            ],
            [
                'user_id' => 6,
                'level_id' => 3,
                'username' => 'kasir-1',
                'nama' => 'Kasir Satu',
                'password' => Hash::make('12345'), //Class untuk mengenkripsikan/ hash password
            ],
            [
                'user_id' => 7,
                'level_id' => 2,
                'username' => 'manager_dua',
                'nama' => 'Manager 2',
                'password' => Hash::make('12345'), //Class untuk mengenkripsikan/ hash password
            ],

            [
                'user_id' => 8,
                'level_id' => 2,
                'username' => 'manager_tiga',
                'nama' => 'Manager 3',
                'password' => Hash::make('12345'), //Class untuk mengenkripsikan/ hash password
            ],
            [
                'user_id' => 9,
                'level_id' => 2,
                'username' => 'manager22',
                'nama' => 'Manager Dua Dua',
                'password' => Hash::make('12345'), //Class untuk mengenkripsikan/ hash password
            ],
            [
                'user_id' => 10,
                'level_id' => 2,
                'username' => 'Manager33',
                'nama' => 'Manager Tiga Tiga',
                'password' => Hash::make('12345'), //Class untuk mengenkripsikan/ hash password
            ],

            [
                'user_id' => 12,
                'level_id' => 2,
                'username' => 'manager55',
                'nama' => 'Manager55',
                'password' => Hash::make('12345'), //Class untuk mengenkripsikan/ hash password
            ],
            [
                'user_id' => 14,
                'level_id' => 2,
                'username' => 'manager11',
                'nama' => 'Manager11',
                'password' => Hash::make('12345'), //Class untuk mengenkripsikan/ hash password
            ],
            [
                'user_id' => 15,
                'level_id' => 1,
                'username' => 'admin2',
                'nama' => 'Admin 2r',
                'password' => Hash::make('12345'), //Class untuk mengenkripsikan/ hash password
            ],
        ];

        DB::table('m_user')->insert($data);
    }
}
