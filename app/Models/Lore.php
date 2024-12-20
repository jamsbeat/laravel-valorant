<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Agent;

class Lore extends Model
{
    /** @use HasFactory<\Database\Factories\LoreFactory> */
    use HasFactory;

    public function agents()
    {
        return $this->hasMany(Agent::class);
    }
}
