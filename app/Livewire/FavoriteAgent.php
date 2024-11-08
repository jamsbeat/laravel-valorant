<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Agent;
use Illuminate\Support\Facades\Auth;

class FavoriteAgent extends Component
{
    public $agentId;

    public function mount($agentId)
    {
        $this->agentId = $agentId;
    }

    public function favorite()
    {
        $user = Auth::user();
        $favoriteAgents = $user->favoriteAgents();

        if ($favoriteAgents->where('agent_id', $this->agentId)->exists()) {
            $favoriteAgents->detach($this->agentId);
            session()->flash('success', 'Agent removed from favorites!');
        } else {
            $favoriteAgents->attach($this->agentId);
            session()->flash('success', 'Agent added to favorites!');
        }
    }

    public function render()
    {
        return view('livewire.favorite-agent');
    }
}
