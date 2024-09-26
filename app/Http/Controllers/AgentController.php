<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index()
    {
        $agents = Agent::all();
    
            return view('agents.index', [
                'agents' => $agents
            ]);
    }
    public function show(Agent $agent)
    {
        return view('agents.show', ['agent' => $agent]);
    }
}
