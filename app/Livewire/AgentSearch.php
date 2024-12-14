<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Agent;

class AgentSearch extends Component
{
    public $search = '';

    public function render()
    {
        $errorMessage = 'No agents found.';
        $errorClasses = 'font-bold font-sans';

        $agents = Agent::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('role', 'like', '%' . $this->search . '%')
            ->get();

        $noResultsMessage = $agents->isEmpty() ? $errorMessage : '';

        return view('livewire.agent-search', [
            'agents' => $agents,
            'noResultsMessage' => $noResultsMessage,
            'errorClasses' => $errorClasses
        ]);
    }
}