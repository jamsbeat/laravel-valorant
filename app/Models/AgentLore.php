<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentLore extends Model
{
    use HasFactory;

    protected $fillable = ['agent_id', 'lore', 'past_experience', 'appearance'];

    public function agents()
    {
        return $this->hasMany(Agent::class);
    }
}
