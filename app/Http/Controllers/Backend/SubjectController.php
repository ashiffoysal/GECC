<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subjects;
use App\Models\University;
use App\Models\Level;
use App\Models\Country;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //join with university and level tables to get the university name and level name

        $allData = Subjects::with('alluniversity', 'level')->orderBy('id', 'DESC')->get();
        return view('backend.subject.index', compact('allData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $universities = University::orderBy('id', 'ASC')->get();
        $levels = Level::orderBy('id', 'ASC')->get();
        $countries = Country::orderBy('id', 'ASC')->get();
        return view('backend.subject.create', compact('universities', 'levels', 'countries'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation
        $request->validate([
            'name' => 'required',
            'university' => 'required',
            'level' => 'required',
            'description' => 'required',
        ]);

        // store data
        $subject = new Subjects();
        $subject->name = $request->name;
        $subject->university = $request->university;
        $subject->level = $request->level;
        $subject->description = $request->description;
        $subject->Waiver = $request->waiver;
        $subject->Scholarship = $request->scholarship;
        $subject->Course_Duration = $request->course_duration;
        $subject->Course_Credits = $request->course_credits;
        $subject->Total_Semester = $request->total_semester;
        $subject->Total_Students = $request->total_students;

            // image upload
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);
                $subject->image = $imageName;
            }
        $subject->save();
        return redirect()->back()->with('success', 'Subject created successfully.');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Subjects::findOrFail($id);
        $universities = University::orderBy('id', 'ASC')->get();
        $levels = Level::orderBy('id', 'ASC')->get();
        $countries = Country::orderBy('id', 'ASC')->get();
        return view('backend.subject.edit', compact('data', 'universities', 'levels', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validation
        $request->validate([
            'name' => 'required',
            'university' => 'required',
            'level' => 'required',
            'description' => 'required',
        ]);

        // update data
        $subject = Subjects::findOrFail($id);
        $subject->name = $request->name;
        $subject->university = $request->university;
        $subject->Level = $request->level;
        $subject->description = $request->description;
        $subject->Waiver = $request->waiver;
        $subject->Scholarship = $request->scholarship;
        $subject->Course_Duration = $request->course_duration;
        $subject->Course_Credits = $request->course_credits;
        $subject->Total_Semester = $request->total_semester;
        $subject->Total_Students = $request->total_students;

            // image upload
            if ($request->hasFile('image')) {
                // delete old image
                if ($subject->image) {
                    unlink(public_path('images/' . $subject->image));
                }
                // upload new image
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);
                $subject->image = $imageName;
            }
        $subject->save();
        return redirect()->back()->with('success', 'Subject updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subject = Subjects::findOrFail($id);
        // delete image
        if ($subject->image) {
            unlink(public_path('images/' . $subject->image));
        }
        $subject->delete();
        return redirect()->back()->with('success', 'Subject deleted successfully.');
    }

    // active
    public function active(string $id)
    {
        $subject = Subjects::findOrFail($id);
        $subject->is_active = 1;
        $subject->save();
        return redirect()->back()->with('success', 'Subject activated successfully.');
    }

    // inactive
    public function inactive(string $id)
    {
        $subject = Subjects::findOrFail($id);
        $subject->is_active = 0;
        $subject->save();
        return redirect()->back()->with('success', 'Subject deactivated successfully.');
    }
}
