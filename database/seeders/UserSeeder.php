<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'mas mahasiswa',
                'nim' => '12345',
                'email' => 'mahasiswa@gmail.com',
                'password' => 12345678,
                'role' => 'mahasiswa',
            ],
            [
                'name' => 'mas petugas',
                'nim' => 'nullable',
                'email' => 'petugas@gmail.com',
                'password' => 12345678,
                'role' => 'petugas',
            ],
            [
                'name' => 'mas admin',
                'nim' => 'nullable',
                'email' => 'admin@gmail.com',
                'password' => 12345678,
                'role' => 'admin',
            ],
        ];
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
