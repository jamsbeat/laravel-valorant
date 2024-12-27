<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'johndoe@test.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
