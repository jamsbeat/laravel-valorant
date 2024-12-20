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

    public function show($agentId)
    {
        $agent = Agent::findOrFail($agentId);

        return view('agents.show', [
            'agent' => $agent,
            'agentId' => $agentId
        ]);
    }

    #public function favoriteAgent($agentId)
    #{
    #    $user = auth()->user();
    #    $user->favoriteAgents()->attach($agentId);
    #
    #    return redirect()->back()->with('success', 'Agent added to favorites!');
    #}
}
