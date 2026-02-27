<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Level;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allData = Level::all();
        return view('backend.level.index', compact('allData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.level.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation
        $request->validate([
            'title' => 'required',
            'total_students' => 'required',
            'course_duration' => 'required',
            'course_credits' => 'required',
            'total_semester' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // store data
        $level = new Level();
        $level->title = $request->title;
        $level->total_students = $request->total_students;
        $level->course_duration = $request->course_duration;
        $level->course_credits = $request->course_credits;
        $level->total_semester = $request->total_semester;
        $level->description = $request->description;
        
        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $level->image = $imageName;
        }

        $level->save();

        return redirect()->back()->with('success', 'Level created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function active(string $id)
    {
        $level = Level::find($id);
        if ($level) {
            $level->is_active = 1;
            $level->save();
            return redirect()->back()->with('success', 'Level activated successfully.');
        } else {
            return redirect()->back()->with('error', 'Level not found.');
        }
    }

    // deactive
    public function deactive(string $id)
    {
        $level = Level::find($id);
        if ($level) {
            $level->is_active = 0;
            $level->save();
            return redirect()->back()->with('success', 'Level deactivated successfully.');
        } else {
            return redirect()->back()->with('error', 'Level not found.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit
        $level = Level::find($id);
        return view('backend.level.edit', compact('level'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'title' => 'required',
            'total_students' => 'required',
            'course_duration' => 'required',
            'course_credits' => 'required',
            'total_semester' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]); 
        // update data
        $level = Level::find($id);
        $level->title = $request->title;
        $level->total_students = $request->total_students;
        $level->course_duration = $request->course_duration;
        $level->course_credits = $request->course_credits;
        $level->total_semester = $request->total_semester;
        $level->description = $request->description;
        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $level->image = $imageName;
        }
        $level->save();
        return redirect()->back()->with('success', 'Level updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $level = Level::find($id);
        if ($level) {
            $level->delete();
            return redirect()->back()->with('success', 'Level deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Level not found.');
        }
    }
}
