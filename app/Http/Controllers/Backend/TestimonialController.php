<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index()
    {
        $allData = Testimonial::where('is_deleted', 1)->get();
        return view('backend.testimonial.index', compact('allData'));
    }
    // create
    public function create()
    {
        return view('backend.testimonial.create');
    }
    // store
    public function store(Request $request)
    {
        // validation
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
        ]);

        // store data
        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->is_video = $request->is_video;

        // check if video or not
        // IMAGE    

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/testimonials'), $imageName);
                $testimonial->image = 'uploads/testimonials/' . $imageName;
            }

        if ($request->is_video) {
           $testimonial->image = $imageName;
            $testimonial->video_url = $request->video_url;
        } else {
            $testimonial->review_text = $request->review_text;
            $testimonial->image = $imageName;
        }
        // $testimonial->created_by = auth()->user()->id;
        $testimonial->save();

        return redirect()->back()->with('success', 'Testimonial created successfully');
    }
    // edit
    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view('backend.testimonial.edit', compact('testimonial'));
    }
    // update
    public function update(Request $request, $id){
        // validation
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
        ]);

        // update data
        $testimonial = Testimonial::find($id);
        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->is_video = $request->is_video;

        // check if video or not
        // IMAGE    
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/testimonials'), $imageName);
                $testimonial->image = 'uploads/testimonials/' . $imageName;
            }

        if ($request->is_video) {
           $testimonial->image = $imageName;
            $testimonial->video_url = $request->video_url;
        } else {
            $testimonial->review_text = $request->review_text;
            $testimonial->image = $imageName;
        }
        // $testimonial->updated_by = auth()->user()->id;
        $testimonial->save();

        return redirect()->back()->with('success', 'Testimonial updated successfully');
    }
    // delete
    public function delete($id)
    {   
        $testimonial = Testimonial::find($id);
        $testimonial->is_deleted = 0;
        $testimonial->save();
        return redirect()->back()->with('success', 'Testimonial deleted successfully');

    }
    // active    
    public function active($id)
    {        
        $testimonial = Testimonial::find($id);
        $testimonial->is_active = 1;
        $testimonial->save();
        return redirect()->back()->with('success', 'Testimonial activated successfully'); 
    }
    
    // inactive
    public function inactive($id){
        $testimonial = Testimonial::find($id);
        $testimonial->is_active = 0;
        $testimonial->save();
        return redirect()->back()->with('success', 'Testimonial deactivated successfully'); 
    }



}
