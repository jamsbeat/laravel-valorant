<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Map;

class MapSearch extends Component
{
    public $search = '';

    public function render()
    {
        $maps = Map::where('title', 'like', '%' . $this->search . '%')
        ->get();

        return view('livewire.map-search');
    }
}
