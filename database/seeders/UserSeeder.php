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
        $users= [
            ['user_id' => '1', 'nama' => 'Administrator', 'email' => 'admin@driverhub.com', 'password' => Hash::make('Admin123')] 
        ];

        foreach ($users as $user) {
            DB::table('user')->insert([
                'user_id' => $user['user_id'],
                'nama' => $user['nama'],
                'email' => $user['email'],
                'password' => $user['password'],
                'created_at' => date('2023-08-10'),
                'updated_at' => date('2023-08-10')
            ]);
        }
    }
}
