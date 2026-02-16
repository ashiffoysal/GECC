<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;

class PartnerController extends Controller
{
    public function index()
    {
        $allData = Partner::where('is_deleted', 1)->get();
        return view('backend.partner.index', compact('allData'));
    }
    // crate partner
    public function create()
    {
        return view('backend.partner.create');
    }
    // store partner
    public function store(Request $request)    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]); 
        $partner = new Partner();
        $partner->title = $request->title;
        $partner->details = $request->details;
        $partner->site_link = $request->site_link;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/partners'), $imageName);
            $partner->image = 'uploads/partners/' . $imageName;
        }
        // $partner->created_by = auth()->user()->id;
        $partner->save();
        return redirect()->back()->with('success', 'Partner created successfully.');
    }
    // edit partner
    public function edit($id)
    {
        $partner = Partner::findOrFail($id);
        return view('backend.partner.edit', compact('partner'));
    }
    // update partner
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $partner = Partner::findOrFail($id);
        $partner->title = $request->title;
        $partner->details = $request->details;
        $partner->site_link = $request->site_link;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/partners'), $imageName);
            $partner->image = 'uploads/partners/' . $imageName;
        }
        $partner->save();
        return redirect()->back()->with('success', 'Partner updated successfully.');
    }
    // active partner
    public function active($id)
    {
        $partner = Partner::findOrFail($id);
        $partner->is_active = 1;
        $partner->save();
        return redirect()->back()->with('success', 'Partner activated successfully.');
    }

    // inactive partner
    public function inactive($id)
    {
        $partner = Partner::findOrFail($id);
        $partner->is_active = 0;
        $partner->save();
        return redirect()->back()->with('success', 'Partner deactivated successfully.');
    }
    // delete partner
    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);
        $partner->is_deleted = 0;
        $partner->save();
        return redirect()->back()->with('success', 'Partner deleted successfully.');
    }
}
