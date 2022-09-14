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

    public function editClient($id)
    {
        $client = Client::find($id);
        $clients = Client::all();
        return view('admin-views.client.edit', compact('client'));
    }

    public function updateClient(Request $request, $id)
    {
        $client=Client::find($id);
        $client->name=$request->input('name');
        $client->email=$request->input('email');
        $client->mobile=$request->input('mobile');
        $client->platform=$request->input('platform');
        $client->address=$request->input('address');
        $client->city=$request->input('city');
        $client->state=$request->input('state');
        $client->country=$request->input('country');
        $client->save();
        Toastr::success('Client Details Updated Successfully!');
        return back();
        
    }

    public function destroyClient($id)
    {
        $client=Client::find($id);
        $client->delete();
        return back();
    }

}
