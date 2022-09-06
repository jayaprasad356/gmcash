<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Project;
class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        $clients = Client::get();
        $projects = Project::get();
        $allcount['clients_count'] = $clients->count();
        $allcount['projects_count'] = $projects->count();


        return view('admin-views.dashboard', compact('allcount'));
    }
}
