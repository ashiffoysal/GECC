<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mission;
use App\Models\History;
use App\Models\OurSuccess;
use App\Models\FinanCialAid;
use App\Models\EligibilityFinanCialAid;
use App\Models\Prerequisites;
use App\Models\ApplicationSupport;
use App\Models\FreeCareerConsultant;

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

    // fiunancial aid
    public function financialAid()
    {   
        $financial_aid = FinanCialAid::first();
        return view('backend.financial_aid.index', compact('financial_aid'));
    }
    // update financial aid
    public function updateFinancialAid(Request $request)
    {        $financial_aid = FinanCialAid::first();
        if ($financial_aid) {
            $financial_aid->title = $request->title;
            $financial_aid->details = $request->details;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/financial_aid'), $imageName);
                $financial_aid->image = 'uploads/financial_aid/' . $imageName;
            }
            $financial_aid->save();
        } else {
            $financial_aid = new FinanCialAid();
            $financial_aid->title = $request->title;
            $financial_aid->details = $request->details;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/financial_aid'), $imageName);
                $financial_aid->image = 'uploads/financial_aid/' . $imageName;
            }
            $financial_aid->save(); 
        }
        return redirect()->back()->with('success', 'Financial Aid updated successfully.');
    }

    // eligibility financial aid
    public function eligibilityFinancialAid()
    {   
        $eligibility_financial_aid = EligibilityFinanCialAid::first();
        return view('backend.eligibility.index', compact('eligibility_financial_aid')); 
    }

    // update eligibility financial aid
    public function updateEligibilityFinancialAid(Request $request)
    {        $eligibility_financial_aid = EligibilityFinanCialAid::first();
        if ($eligibility_financial_aid) {
            $eligibility_financial_aid->title = $request->title;
            $eligibility_financial_aid->details = $request->details;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/eligibility_financial_aid'), $imageName);
                $eligibility_financial_aid->image = 'uploads/eligibility_financial_aid/' . $imageName;
            }
            $eligibility_financial_aid->save();
        } else {
            $eligibility_financial_aid = new EligibilityFinanCialAid();
            $eligibility_financial_aid->title = $request->title;
            $eligibility_financial_aid->details = $request->details;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/eligibility_financial_aid'), $imageName);
                $eligibility_financial_aid->image = 'uploads/eligibility_financial_aid/' . $imageName;
            }
            $eligibility_financial_aid->save();
        }
        return redirect()->back()->with('success', 'Eligibility Financial Aid updated successfully.');

    }

    // prerequisites
    public function prerequisites()
    {   
        $prerequisite = Prerequisites::first();
        return view('backend.prerequisites.index', compact('prerequisite'));
    }

    // update prerequisites
    public function updatePrerequisites(Request $request)
    {        $prerequisite = Prerequisites::first();
        if ($prerequisite) {
            $prerequisite->title = $request->title;
            $prerequisite->details = $request->details;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/prerequisites'), $imageName);
                $prerequisite->image = 'uploads/prerequisites/' . $imageName;
            }
            $prerequisite->save();
        } else {
            $prerequisite = new Prerequisites();
            $prerequisite->title = $request->title;     
            $prerequisite->details = $request->details;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/prerequisites'), $imageName);
                $prerequisite->image = 'uploads/prerequisites/' . $imageName;
            }
            $prerequisite->save();
        }
        return redirect()->back()->with('success', 'Prerequisites updated successfully.');
    }

    // application support
    public function applicationSupport()
    {        $application_support = ApplicationSupport::first();
        return view('backend.application_support.index', compact('application_support'));
    }   

    // update application support
    public function updateApplicationSupport(Request $request)
    {        
        
        $application_support = ApplicationSupport::first();
        if ($application_support) {
            $application_support->title = $request->title;
            $application_support->details = $request->details;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/application_support'), $imageName);
                $application_support->image = 'uploads/application_support/' . $imageName;
            }
            $application_support->save();
        } else {
            $application_support = new ApplicationSupport();
            $application_support->title = $request->title;
            $application_support->details = $request->details;
            if ($request->hasFile('image')) {
                $image = $request->file('image');   
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/application_support'), $imageName);
                $application_support->image = 'uploads/application_support/' . $imageName;
            }
            $application_support->save();
        }
        return redirect()->back()->with('success', 'Application Support updated successfully.');
    }

    // free career consultant
    public function freeCareerConsultant()
    {        $carrer = FreeCareerConsultant::first();
        return view('backend.free_career_cosultant.index', compact('carrer'));
    }
    // 
    // update free career consultant
    public function updateFreeCareerConsultant(Request $request)
    {        $carrer = FreeCareerConsultant::first();
        if ($carrer) {
            $carrer->title = $request->title;
            $carrer->description = $request->details;
            $carrer->meeting_link = $request->meeting_link;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/free_career_consultant'), $imageName);
                $carrer->image = 'uploads/free_career_consultant/' . $imageName;
            }
            $carrer->save();
        } else {
            $carrer = new FreeCareerConsultant();
            $carrer->title = $request->title;
            $carrer->description = $request->details;
            $carrer->meeting_link = $request->meeting_link;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/free_career_consultant'), $imageName);
                $carrer->image = 'uploads/free_career_consultant/' . $imageName;
            }
            $carrer->save(); 
        }
        return redirect()->back()->with('success', 'Free Career Consultant updated successfully.');
    }
}
