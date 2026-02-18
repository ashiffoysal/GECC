<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mission;
use App\Models\History;
use App\Models\OurSuccess;

class SettingsController extends Controller
{
    public function mission()
    {
        $mission = Mission::first();
        return view('backend.mission.index', compact('mission'));
       
    }

    // update mission
    public function updateMission(Request $request)
    {
        $mission = Mission::first();
        if ($mission) {
            $mission->title = $request->title;
            $mission->details = $request->details;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/mission'), $imageName);
                $mission->image = 'uploads/mission/' . $imageName;
            }
            $mission->save();
        } else {
            $mission = new Mission();
            $mission->title = $request->title;
            $mission->details = $request->details;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/mission'), $imageName);
                $mission->image = 'uploads/mission/' . $imageName;
            }
            $mission->save();
        }
        return redirect()->back()->with('success', 'Mission, Vision & Values updated successfully.');
    }


    // history
    public function history()
    {        $history = History::first();
        return view('backend.history.index', compact('history'));
    }

    // update history
    public function updateHistory(Request $request)
    {        $history = History::first();
        if ($history) {
            $history->title = $request->title;
            $history->details = $request->details;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/history'), $imageName);
                $history->image = 'uploads/history/' . $imageName;
            }
            $history->save();
        } else {
            $history = new History();
            $history->title = $request->title;
            $history->details = $request->details;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/history'), $imageName);
                $history->image = 'uploads/history/' . $imageName; 
            }
            $history->save();
        }
        return redirect()->back()->with('success', 'History updated successfully.');
    }

    // success
    public function success()
    {   
        
        $success = OurSuccess::first();
        return view('backend.success.index', compact('success'));  
    }

    // update success
    public function updateSuccess(Request $request)
    {        $success = OurSuccess::first();
        if ($success) {
            $success->title = $request->title;
            $success->details = $request->details;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/success'), $imageName);
                $success->image = 'uploads/success/' . $imageName;
            }
            $success->save();
        } else {
            $success = new OurSuccess();
            $success->title = $request->title;
            $success->details = $request->details;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/success'), $imageName);
                $success->image = 'uploads/success/' . $imageName;
            }   
            $success->save();
        }
        return redirect()->back()->with('success', 'Our Success updated successfully.');
    }



}
