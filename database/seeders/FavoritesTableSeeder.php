<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\FavoriteAgent;

class FavoritesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('favorite_agents')->insert([
            [
                'user_id' => 1,
                'agent_id' => 1,
            ],
            [
                'user_id' => 1,
                'agent_id' => 2,
            ],
            [
                'user_id' => 1,
                'agent_id' => 3,
            ],
        ]);
    }
}
