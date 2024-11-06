<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Services\TeamService;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function __construct(private TeamService $teamService)
    {
        
    }

    public function index(){
        $data = $this->teamService->getAllTeams();
        return view('backend.pages.team.index', compact('data'));
    }

    public function create(){
        return view('backend.pages.team.create');
    }

    public function store(TeamRequest $request){
        $teams = $this->teamService->storeTeam($request);
        if ($teams) return redirect()->route('teams.index')->with('success', "Team created successfully.");
        return redirect()->back()->with('error', "Something went wrong");
    }

    public function edit($id){
        $team = $this->teamService->getSingleTeam($id);
        return view('backend.pages.team.create', compact('team'));
    }

    public function update($id, TeamRequest $request){
        $team = $this->teamService->updateTeam($id, $request);
        if($team) return redirect()->route('teams.index')->with('success', 'Team updated successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }

    public function destroy($id){
        $team = $this->teamService->deleteTeam($id);
        if($team) return redirect()->route('teams.index')->with('success', 'Team deleted successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }
}
