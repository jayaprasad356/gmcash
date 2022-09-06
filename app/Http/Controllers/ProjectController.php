<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Project;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\DB;
class ProjectController extends Controller
{
    public function addproject(Request $request)
    {
        $query_param = [];
        $clients = Client::all();

        return view('admin-views.project.index', compact('clients'));
    }
    public function storeProject(Request $request)
    {
        $request->validate([
            'client_id' => 'required',
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
        ]);

        $user = new Project();
        $user->client_id = $request->client_id;
        $user->name = $request->name;
        $user->category = $request->category;
        $user->description = $request->description;
        $user->save();
        Toastr::success('Project Added Successfully!');
        return back();
    }
    public function listProjects(Request $request)
    {
        $query_param = [];
        //$projects = Project::paginate(10);
        $projects = DB::table('projects')->select('projects.id','projects.name','projects.category','clients.name AS client_name')

        ->join('clients','clients.id','=','projects.client_id')->paginate(15);
        



        return view('admin-views.project.list', compact('projects'));
    }
    public function editProject($id)
    {
        $project = Project::find($id);
        $clients = Client::all();
        return view('admin-views.project.edit', compact('project','clients'));
    }
}
