<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Carbon\Carbon;
use App\Models\Category;

class BlogController extends Controller
{
    // index
    public function index()
    {
        // related data with category   
        // $categories = Category::where('is_active', 1)->get();
        $allData = Blog::orderBy('created_at', 'desc')->get();
        return view('backend.blog.index', compact('allData'));
    }

    // create
    public function create()
    {
        $categories = Category::where('is_active', 1)->get();
        return view('backend.blog.create',compact('categories'));
    }

    // store
    public function store(Request $request){
        // validation
        $request->validate([
            'blog_title' => 'required',
            'blog_description' => 'required',
            'blog_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $slug = strtolower(str_replace(' ', '-', $request->blog_title)).'-'.time();

        // image upload
        if ($request->hasFile('blog_image')) {
            $image = $request->file('blog_image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/blogs');
            $image->move($destinationPath, $name);
            $blog_image = '/uploads/blogs/'.$name;
        } else {
            $blog_image = null;
        }  

            // store data       
            $blog = new Blog();
            $blog->title = $request->blog_title;
            $blog->description = $request->blog_description;
            $blog->tags = $request->blog_tags;
            $blog->category = $request->blog_category;
            $blog->	slugs = $slug;
            $blog->blog_image = $blog_image;
            //$blog->created_by = auth()->user()->id;
            $blog->save();
            return redirect()->back()->with('success', 'Blog created successfully.');

    }

    // edit
    public function edit($id)
    {
        $categories = Category::where('is_active', 1)->get();
        $blog = Blog::findOrFail($id);
        return view('backend.blog.edit', compact('blog', 'categories'));
    }
    // active
    public function active($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->is_active = 1;
        $blog->save();
        return redirect()->route('admin.blog.index')->with('success', 'Blog activated successfully.');  
    }

    // inactive
    public function inactive($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->is_active = 0;
        $blog->save();
        return redirect()->route('admin.blog.index')->with('success', 'Blog deactivated successfully.');  
    }   

    // update
    public function update(Request $request, $id)
    {
        // validation
        $request->validate([
            'blog_title' => 'required',
            'blog_description' => 'required',
          
        ]); 
        
        $blog = Blog::findOrFail($id);  
        $slug = strtolower(str_replace(' ', '-', $request->blog_title)).'-'.time();

        // image upload
        if ($request->hasFile('blog_image')) {
            $image = $request->file('blog_image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/blogs');
            $image->move($destinationPath, $name);
            $blog_image = '/uploads/blogs/'.$name;  
            // delete old image
            if ($blog->blog_image) {
                unlink(public_path($blog->blog_image));

            }
        } else {
            $blog_image = $blog->blog_image;
        }
        
            // update data       
            $blog->title = $request->blog_title;
            $blog->description = $request->blog_description;
            $blog->tags = $request->blog_tags;
            $blog->category = $request->blog_category;
            $blog->	slugs = $slug;
            $blog->blog_image = $blog_image;
            //$blog->updated_by = auth()->user()->id;
            $blog->save();
            return redirect()->back()->with('success', 'Blog updated successfully.');    
    }

    // delete
    public function destroy($id)
    {   
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('admin.blog.index')->with('success', 'Blog deleted successfully.');
    }
   
}
