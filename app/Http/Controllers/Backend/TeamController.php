<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurTeam;
use Carbon\Carbon;

class TeamController extends Controller
{
    // 
    public function index()
    {
        $allData = OurTeam::latest()->get();
        return view('backend.team.index', compact('allData'));
    }

    // 
    public function create()
    {
        return view('backend.team.create');
    }
    // store

    public function store(Request $request)
    {
         // ✅ Validation
        $request->validate([
            'name'       => 'required|string|max:255',
            'email'      => 'required|email|max:255',
            'phone'      => 'required|string|max:50',
            'position'   => 'required|string|max:255',

            'is_active'     => 'required|in:0,1',
            'image'      => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // ✅ Image Upload
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/team'), $imageName);
        }

        // ✅ Insert Data
        OurTeam::create([
            'name'       => $request->name,
            'email'      => $request->email,
            'phone'      => $request->phone,
            'position'   => $request->position,
            'facebook'   => $request->facebook,
            'twitter'    => $request->twitter,
            'linkedin'   => $request->linkedin,
            'instagram'  => $request->instagram,
            'is_active'     => $request->is_active,
            'image'      => $imageName,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->back()->with('success', 'Team Create success');
    }

    // edit
    public function edit($id)
    {
        $team = OurTeam::findOrFail($id);
        return view('backend.team.edit', compact('team'));
    }

    // update
    public function update(Request $request, $id)
    {
        // ✅ Validation
        $request->validate([
            'name'       => 'required|string|max:255',
            'email'      => 'required|email|max:255',           
            'phone'      => 'required|string|max:50',
            'position'   => 'required|string|max:255',
            'is_active'     => 'required|in:0,1',
            'image'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);     
        // ✅ Find Data
        $teamMember = OurTeam::findOrFail($id);

        // ✅ Image Upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();       
            $request->image->move(public_path('uploads/team'), $imageName);
            $teamMember->image = $imageName;
        }
        // ✅ Update Data
        $teamMember->name       = $request->name;
        $teamMember->email      = $request->email;      
        $teamMember->phone      = $request->phone;
        $teamMember->position   = $request->position;
        $teamMember->facebook   = $request->facebook;
        $teamMember->twitter    = $request->twitter;
        $teamMember->linkedin   = $request->linkedin;
        $teamMember->instagram  = $request->instagram;
        $teamMember->is_active     = $request->is_active;
        $teamMember->save();        
        return redirect()->route('admin.team.index')->with('success', 'Team Member Updated Successfully');  
    }

    //
    public function destroy($id)
    {
        $teamMember = OurTeam::findOrFail($id);
        $teamMember->delete();
        return redirect()->back()->with('success', 'Team Member Deleted Successfully');
    }

    // active
    public function active($id)
    {   

        $teamMember = OurTeam::findOrFail($id);
        $teamMember->is_active = 1;
        $teamMember->save();
        return redirect()->back()->with('success', 'Team Member Activated Successfully');
    }   

    // inactive
    public function inactive($id)
    {
        $teamMember = OurTeam::findOrFail($id);
        $teamMember->is_active = 0;
        $teamMember->save();
        return redirect()->back()->with('success', 'Team Member Deactivated Successfully'); 

    }


}
