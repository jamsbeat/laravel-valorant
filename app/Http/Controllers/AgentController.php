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

    public function show($name)
    {
        $agent = Agent::where('name', $name)->firstOrFail();
        return view('agents.show', compact('agent'));   
    }

    #public function favoriteAgent($agentId)
    #{
    #    $user = auth()->user();
    #    $user->favoriteAgents()->attach($agentId);
    #
    #    return redirect()->back()->with('success', 'Agent added to favorites!');
    #}
}