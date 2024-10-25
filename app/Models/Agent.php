<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AgentLore;
use App\Models\Ability;

class Agent extends Model
{
    use HasFactory;

    public function ability()
    {
        return $this->belongsTo(Ability::class);
    }

    public function lore()
    {
        return $this->belongsTo(AgentLore::class);
    }
}
