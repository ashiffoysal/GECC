<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Carbon\Carbon;

class GalleryController extends Controller
{
    // inde
    public function index()
    {
        $allData = Gallery::latest()->get();
        return view('backend.gallery.index', compact('allData'));
    }
    // create
    public function create()
    {
        return view('backend.gallery.create');  

    }
    // store
    public function store(Request $request)
    {
         // ✅ Validation
        $request->validate([
            'title'       => 'required|string|max:255',
            'image'      => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]); 
        // ✅ Image Upload
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/gallery'), $imageName);  
        }
        // ✅ Insert Data
        Gallery::create([
            'title'       => $request->title,
            'image'      => $imageName,
            'created_at' => Carbon::now(),
        ]); 
        return redirect()->back()->with('success', 'Gallery Image Added Successfully');
    }

    // edit
    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('backend.gallery.edit', compact('gallery'));
    }

    // update
    public function update(Request $request, $id)
    {
         // ✅ Validation
        $request->validate([
            'title'       => 'required|string|max:255',
            'image'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]); 
        $gallery = Gallery::findOrFail($id);
        // ✅ Image Upload
        $imageName = $gallery->image; // Keep the old image by default
        if ($request->hasFile('image')) {
            // Delete the old image if exists
            if ($gallery->image && file_exists(public_path('uploads/gallery/' . $gallery->image))) {
                unlink(public_path('uploads/gallery/' . $gallery->image));      
            }   
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/gallery'), $imageName);
        }
        // ✅ Update Data
        $gallery->title = $request->title;
        $gallery->image = $imageName;
        $gallery->save();
        return redirect()->route('admin.gallery.index')->with('success', 'Gallery Image Updated Successfully');
    }
    // destroy
    public function destroy($id){
        $gallery = Gallery::findOrFail($id);
        // Delete the image file if exists
        if ($gallery->image && file_exists(public_path('uploads/gallery/' . $gallery->image))) {
            unlink(public_path('uploads/gallery/' . $gallery->image));      
        }   
        $gallery->delete();
        return redirect()->route('admin.gallery.index')->with('success', 'Gallery Image Deleted Successfully');
    }
    //Active
    public function active($id){
        Gallery::findOrFail($id)->update(['is_active' => 1]);
        return redirect()->back()->with('success', 'Gallery Image Active Successfully');
    }
    //Inactive
    public function inactive($id){
        Gallery::findOrFail($id)->update(['is_active' => 0]);
        return redirect()->back()->with('success', 'Gallery Image Inactive Successfully');  
    } 

}
