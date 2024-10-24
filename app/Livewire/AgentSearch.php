<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Agent;

class AgentSearch extends Component
{
    public $search = '';

    public function render()
    {
        $agents = Agent::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('role', 'like', '%' . $this->search . '%')
            ->get();

        return view('livewire.agent-search', [
            'agents' => $agents
        ]);
    }
}