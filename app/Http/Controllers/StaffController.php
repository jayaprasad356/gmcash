<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;


class StaffController extends Controller
{
    public function addstaff(Request $request)
    {
        $query_param = [];
        $staffs = Staff::all();

        return view('admin-views.staff.index', compact('staffs'));
    }
    public function storeStaff(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'dob' => 'required',
            'role' => 'required',
            'address' => 'required',
            'state' => 'required',
            'country' => 'required',
        ]);

        $user = new Staff();
        $user->name = $request->name;
        $user->mobile = $request->mobile;
        $user->email = $request->email;
        $user->dob = $request->dob;
        $user->role = $request->role;
        $user->address = $request->address;
        $user->state = $request->state;
        $user->country = $request->country;

        if($request->hasFile('image')){
            $request->validate([
                'image'=>'image|mimes:jpeg,png,jpg,gif,svg',
            ]);
            $image=$request->file('image');
            $new_image_name =date('Y-md-d').time().".".$image->extension();
            $destination_path=public_path('/images');
            $image->move($destination_path,$new_image_name);
            $user->photo= "images/".$new_image_name;
        }
        $user->save();
        Toastr::success('Staff Added Successfully!');
        return back();
    }
    public function listStaffs(Request $request)
    {
        $query_param = [];
        $staffs = Staff::paginate(10);

        return view('admin-views.staff.list', compact('staffs'));
    }


    public function editStaff($id)
    {
        $staff = Staff::find($id);
        $staffs = Staff::all();
        return view('admin-views.staff.edit', compact('staff'));
    }

    
    public function updateStaff(Request $request, $id)
    {
        $staff=Staff::find($id);
        $staff->name=$request->input('name');
        $staff->email=$request->input('email');
        $staff->mobile=$request->input('mobile');
        $staff->dob=$request->input('dob');
        $staff->role=$request->input('role');
        $staff->address=$request->input('address');
        $staff->state=$request->input('state');


        if($request->hasFile('image')){
            $request->validate([
                'image'=>'image|mimes:jpeg,png,jpg,gif,svg',
            ]);
            $old_image=public_path('/images').$staff->photo;
            if(File::exists($old_image)){
                  File::delete($old_image);
            }

            $image=$request->file('image');
            $new_image_name =date('Y-md-d').time().".".$image->extension();
            $destination_path=public_path('/images');
            $image->move($destination_path,$new_image_name);
            $staff->photo= "images/".$new_image_name;
        }
        $staff->update();
        Toastr::success('Staff Details Updated Successfully!');
        return back();
    }

   
    public function destroyStaff($id)
    {
        $staff=Staff::find($id);
        $staff->delete();
        return back();
    }
}
