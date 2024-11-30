<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $agents = Agent::with('users')
            ->get()
            ->sortByDesc(function ($agent) use ($user) {
                return $agent->users->contains($user);
            });

        return view('agents.index', [
            'agents' => $agents
        ]);
    }

    public function show(Agent $agent)
    {
        return view('agents.show', ['agent' => $agent]);
    }

    public function showAgents($id) {
        $agent = Agent::find($id);
        return view('agent-list', compact('agent'));
    }
    
    #public function favoriteAgent($agentId)
    #{
    #    $user = auth()->user();
    #    $user->favoriteAgents()->attach($agentId);
    #
    #    return redirect()->back()->with('success', 'Agent added to favorites!');
    #}
}