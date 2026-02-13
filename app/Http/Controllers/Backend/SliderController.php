<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Carbon\Carbon;

class SliderController extends Controller
{
    public function create()
    {
        return view('backend.slider.create');
    }
    // Other methods like store, edit, update, delete can be added here

    public function store(Request $request)
    {
        // Validate and store the slider item
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'button_url' => 'nullable|url',
            'image' => 'nullable|image|max:2048',
        ]);
        // Logic to store the slider item in the database   
                // ✅ Image Upload
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/slider'), $imageName);  
        }
        // ✅ Insert Data
        Slider::create([
            'title'       => $request->title,
            'description' => $request->description,
            'button_url'  => $request->button_url,
            'image'      => $imageName,
            'created_at' => Carbon::now(),
        ]); 
        return redirect()->back()->with('success', 'Slider Item Added Successfully');

    }

    // Other methods like edit, update, delete can be added here
    public function index()
    {
        $allData = Slider::latest()->get();
        return view('backend.slider.index', compact('allData'));
    }

    // edit
    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('backend.slider.edit', compact('slider'));
    }

    // update
    public function update(Request $request, $id)
    {
            // ✅ Validation
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'button_url'  => 'nullable|url',
            'image'      => 'nullable|image|max:2048',
        ]); 
        $slider = Slider::findOrFail($id);
        // ✅ Image Upload
        $imageName = $slider->image; // Keep the old image by default
        if ($request->hasFile('image')) {
            // Delete the old image if exists
            if ($slider->image && file_exists(public_path('uploads/slider/' . $slider->image))) {
                unlink(public_path('uploads/slider/' . $slider->image));    
            }
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/slider'), $imageName);

        }
        // ✅ Update Data
        $slider->update([
            'title'       => $request->title,
            'description' => $request->description,
            'button_url'  => $request->button_url,
            'image'      => $imageName,
            'updated_at' => Carbon::now(),
        ]); 
        return redirect()->back()->with('success', 'Slider Item Updated Successfully');
    }
    // destroy
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        // Delete the image file if exists
        if ($slider->image && file_exists(public_path('uploads/slider/' . $slider->image))) {
            unlink(public_path('uploads/slider/' . $slider->image));
        }   
        $slider->delete();
        return redirect()->back()->with('success', 'Slider Item Deleted Successfully');
    }
    // active
    public function active($id)
    {
        $slider = Slider::findOrFail($id);
        $slider->is_active = 1;
        $slider->save();
        return redirect()->back()->with('success', 'Slider Item Activated Successfully');   
    }

    // inactive
    public function inactive($id)
    {
        $slider = Slider::findOrFail($id);
        $slider->is_active = 0;
        $slider->save();
        return redirect()->back()->with('success', 'Slider Item Deactivated Successfully'); 
    }
}
