<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Client;
use Brian2694\Toastr\Facades\Toastr;

class ClientController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'platform' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
        ]);

        $user = new Client();
        $user->name = $request->name;
        $user->mobile = $request->mobile;
        $user->email = $request->email;
        $user->platform = $request->platform;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->country = $request->country;
        $user->save();
        Toastr::success('Client Added Successfully!');
        return back();
    }
    public function list(Request $request)
    {
        $query_param = [];
        $clients = Client::paginate(10);

        return view('admin-views.client.list', compact('clients'));
    }

}
