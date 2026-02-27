<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\University;
use App\Models\Country;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allData = University::all();
        return view('backend.university.index', compact('allData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries=Country::orderBy('id','ASC')->get();
        return view('backend.university.create', compact('countries'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation
        $request->validate([
            'name' => 'required',
            'country' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // store data
        $university = new University();
        $university->name = $request->name;
        $university->country = $request->country;
          $university->location = $request->location;
        $university->description = $request->description;
        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $university->image = $imageName;
        }
        $university->save();
        return redirect()->back()->with('success', 'University created successfully.');
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editData = University::find($id);
        $countries=Country::orderBy('id','ASC')->get();
        return view('backend.university.edit', compact('editData','countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validation
        $request->validate([
            'name' => 'required',
            'country' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // update data
        $university = University::find($id);
        $university->name = $request->name;
        $university->country = $request->country;
          $university->location = $request->location;
        $university->description = $request->description;
        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $university->image = $imageName;
        }
        $university->save();
        return redirect()->back()->with('success', 'University updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $university = University::find($id);
        if ($university) {
            $university->delete();
            return redirect()->back()->with('success', 'University deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'University not found.');
        }
    }

    // active
    public function active(string $id)
    {
        $university = University::find($id);
        if ($university) {
            $university->is_active = 1;
            $university->save();
            return redirect()->back()->with('success', 'University activated successfully.');
        } else {
            return redirect()->back()->with('error', 'University not found.');
        }
    }

    // inactive
    public function inactive(string $id)
    {
        $university = University::find($id);
        if ($university) {
            $university->is_active = 0; 
            $university->save();
            return redirect()->back()->with('success', 'University deactivated successfully.');
        } else {
            return redirect()->back()->with('error', 'University not found.');
        }
    }
}
