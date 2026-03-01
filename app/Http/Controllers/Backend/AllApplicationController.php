<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CandidateApplication;

class AllApplicationController extends Controller
{
    public function index()
    {
        $allData = CandidateApplication::latest()->get();
        return view('backend.allapplication.index', compact('allData'));
    }

    // delete method
    public function destroy($id)
    {   
        $application = CandidateApplication::find($id);
        if ($application) {
            $application->delete();
            return redirect()->back()->with('success', 'Application deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Application not found.');
        }
    }

    // view method
    public function view($id)
    {
        $application = CandidateApplication::find($id);
        if ($application) {
            return view('backend.allapplication.view', compact('application'));
        } else {
            return redirect()->back()->with('error', 'Application not found.');
            }
    }

    // notes
    public function updateNotes(Request $request)
    {
        $application = CandidateApplication::find($request->id);
        if ($application) {
            $application->notes = $request->notes;
            $application->save();

             return response()->json(['status' => 'success']);
        } else {
             return response()->json(['status' => 'error', 'message' => 'Application not found']);
        }
    }
}
