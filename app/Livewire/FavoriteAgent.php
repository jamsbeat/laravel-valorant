<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Agent;

class FavoriteAgent extends Component
{
    public $agentId;
    public $favorited;

    public function mount($agentId)
    {
        $this->agentId = $agentId;
        $this->favorited = Auth::check() && Auth::user()->favorites()->where('agent_id', $agentId)->exists();
    }

    public function favorite(): void
    {
        if (!Auth::check()) {
            return;
        }

        $user = Auth::user();

        $favorite = $user->favorites()->where('agent_id', $this->agentId)->first();

        if ($favorite) {
            $favorite->delete();
            $this->favorited = false;
        } else {
            $user->favorites()->create([
                'agent_id' => $this->agentId,
                'user_id' => $user->id,
            ]);
            $this->favorited = true;
        }
    }

    public function render()
    {
        return view('livewire.favorite-agent');
    }
}
