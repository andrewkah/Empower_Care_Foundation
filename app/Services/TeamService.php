<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Http\Requests\TeamRequest;
use App\Models\Team;
use Illuminate\Support\Facades\Auth;
class TeamService{

    public function __construct(private Team $team)
    {

    }
    // create team
    public function storeTeam(TeamRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['name']);
        $data['created_by'] = Auth::id();
        return $this->team->create($data);
    }
    // get all teams
    public function getAllTeams()
    {
        return $this->team->all();
    }
    // get team by id
    public function getSingleTeam($id)
    {
        return $this->team->where('id', $id)->first();
    }
    // update team
    public function updateTeam($id, TeamRequest $team)
    {
        return $this->team->findOrFail($id)->update($team->validated());

    }
    // delete team
    public function deleteTeam($id)
    {
        return $this->team->destroy($id);
    }
}

?>