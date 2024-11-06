<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Http\Requests\TeamRequest;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class TeamService{

    public function __construct(private Team $team)
    {

    }
    // create team
    public function storeTeam(TeamRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) $path = $request->file('photo')->store('teams'); else $path=null;
        $data['photo'] = $path;
        $data['slug'] = Str::random(10);
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
        $path = $this->getSingleTeam($id)->photo;
        if ($team->hasFile('photo')) $path = $team->file('photo')->store('teams');
        $data = $team->validated();
        $data['photo'] = $path;
        $data['updated_by'] = Auth::id();
        return $this->team->findOrFail($id)->update($data);
    }
    // delete team
    public function deleteTeam($id)
    {
        return $this->team->destroy($id);
    }

    public function getAllTeamsOrderByCreatedAt(){
        $data= $this->team->orderBy('created_at', 'desc')->get();
        if ($data){
            foreach ($data as $team){
                $team->date = Carbon::parse($team->created_at)->format('F j, h:i A');
                $team->time = Carbon::parse($team->created_at)->format('M, Y');
                $team->day = Carbon::parse($team->created_at)->format('d');
            }
        }
        return $data;
    }
    public function getTeamBySlug($id){
        $data = $this->team->where('slug', $id)->first();
        if ($data){
            $data->date = Carbon::parse($data->created_at)->format('F j, h:i A');
            $data->time = Carbon::parse($data->created_at)->format('M, y');
            $data->day = Carbon::parse($data->created_at)->format('d');
        }
        return $data;
    }
}

?>