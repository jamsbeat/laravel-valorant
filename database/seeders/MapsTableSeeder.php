<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MapsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('maps')->insert([
            [
                'title' => 'Ascent',
                'img1' => 'https://media.valorant-api.com/maps/2c9d57ec-4431-9c5e-2939-8f9ef6dd5cba/splash.png',
                'img2' => 'https://media.valorant-api.com/maps/2c9d57ec-4431-9c5e-2939-8f9ef6dd5cba/stylized.png',
                'img3' => 'https://media.valorant-api.com/maps/2c9d57ec-4431-9c5e-2939-8f9ef6dd5cba/displayicon.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Bind',
                'img1' => 'https://media.valorant-api.com/maps/b529448b-4d60-346e-e89e-00a4c527a405/splash.png',
                'img2' => 'https://media.valorant-api.com/maps/b529448b-4d60-346e-e89e-00a4c527a405/stylized.png',
                'img3' => 'https://media.valorant-api.com/maps/b529448b-4d60-346e-e89e-00a4c527a405/displayicon.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Haven',
                'img1' => 'https://media.valorant-api.com/maps/add6443a-41bd-e414-f6ad-e58d267f4e95/splash.png',
                'img2' => 'https://media.valorant-api.com/maps/add6443a-41bd-e414-f6ad-e58d267f4e95/stylized.png',
                'img3' => 'https://media.valorant-api.com/maps/add6443a-41bd-e414-f6ad-e58d267f4e95/displayicon.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Split',
                'img1' => 'https://media.valorant-api.com/maps/71080301-451b-56f4-9d9a-0b2e5b1337c3/splash.png',
                'img2' => 'https://media.valorant-api.com/maps/71080301-451b-56f4-9d9a-0b2e5b1337c3/stylized.png',
                'img3' => 'https://media.valorant-api.com/maps/71080301-451b-56f4-9d9a-0b2e5b1337c3/displayicon.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Icebox',
                'img1' => 'https://media.valorant-api.com/maps/e2ad5c54-4114-a870-9641-8ea21279579a/splash.png',
                'img2' => 'https://media.valorant-api.com/maps/e2ad5c54-4114-a870-9641-8ea21279579a/stylized.png',
                'img3' => 'https://media.valorant-api.com/maps/e2ad5c54-4114-a870-9641-8ea21279579a/displayicon.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Breeze',
                'img1' => 'https://media.valorant-api.com/maps/2c9d57ec-4431-9c5e-2939-8f9ef6dd5cba/splash.png',
                'img2' => 'https://media.valorant-api.com/maps/2c9d57ec-4431-9c5e-2939-8f9ef6dd5cba/stylized.png',
                'img3' => 'https://media.valorant-api.com/maps/2c9d57ec-4431-9c5e-2939-8f9ef6dd5cba/displayicon.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Fracture',
                'img1' => 'https://media.valorant-api.com/maps/2c9d57ec-4431-9c5e-2939-8f9ef6dd5cba/splash.png',
                'img2' => 'https://media.valorant-api.com/maps/2c9d57ec-4431-9c5e-2939-8f9ef6dd5cba/stylized.png',
                'img3' => 'https://media.valorant-api.com/maps/2c9d57ec-4431-9c5e-2939-8f9ef6dd5cba/displayicon.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
