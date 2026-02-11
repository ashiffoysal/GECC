<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Carbon\Carbon;
use App\Models\Category;

class EventController extends Controller
{
        // index
    public function index()
    {
        // related data with category   
        // $categories = Category::where('is_active', 1)->get();
        $allData = Event::orderBy('created_at', 'desc')->get();
        return view('backend.event.index', compact('allData'));
    }

    // create
    public function create()
    {
        $categories = Category::where('is_active', 1)->get();
        return view('backend.event.create',compact('categories'));
    }

    // store
    public function store(Request $request){
        // validation
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $slug = strtolower(str_replace(' ', '-', $request->title)).'-'.time();

        // image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/events');
            $image->move($destinationPath, $name);
            $event_image = '/uploads/events/'.$name;
        } else {
            $event_image = null;
        }  

            // store data       
            $event = new Event();
            $event->title = $request->title;
            $event->description = $request->description;
            $event->tags = $request->tags;
            $event->category = $request->category;
            $event->slugs = $slug;
            $event->image = $event_image;
            //$event->created_by = auth()->user()->id;
            $event->save();
            return redirect()->back()->with('success', 'Event created successfully.');

    }

    // edit
    public function edit($id)
    {
        $categories = Category::where('is_active', 1)->get();
        $event = Event::findOrFail($id);
        return view('backend.event.edit', compact('event', 'categories'));
    }
    // active
    public function active($id)
    {
        $event = Event::findOrFail($id);
        $event->is_active = 1;
        $event->save();
        return redirect()->route('admin.event.index')->with('success', 'Event activated successfully.');  
    }

    // inactive
    public function inactive($id)
    {
        $event = Event::findOrFail($id);
        $event->is_active = 0;
        $event->save();
        return redirect()->route('admin.event.index')->with('success', 'Event deactivated successfully.');  
    }   

    // update
    public function update(Request $request, $id)
    {
        // validation
        $request->validate([
            'title' => 'required',
            'description' => 'required',
          
        ]); 
        
        $event = Event::findOrFail($id);  
        $slug = strtolower(str_replace(' ', '-', $request->event_title)).'-'.time();

        // image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/events');
            $image->move($destinationPath, $name);
            $event_image = '/uploads/events/'.$name;  
            // delete old image
            if ($event->image) {
                unlink(public_path($event->image));

            }
        } else {
            $event_image = $event->image;
        }
        
            // update data       
            $event->title = $request->title;
            $event->description = $request->description;
            $event->tags = $request->tags;
            $event->category = $request->category;
            $event->slugs = $slug;
            $event->image = $event_image;
            //$event->updated_by = auth()->user()->id;
            $event->save();
            return redirect()->back()->with('success', 'Event updated successfully.');    
    }

    // delete
    public function destroy($id)
    {   
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect()->route('admin.event.index')->with('success', 'Event deleted successfully.');
    }
}
