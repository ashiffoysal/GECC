<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Models\Slider;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Event;
use App\Models\OurTeam;
use App\Models\Mission;
use App\Models\Partner;
use App\Models\History;
use App\Models\OurSuccess;
use App\Models\WantToStudyAbroad;

class FrontendController extends Controller
{
    public function index()
    {
        $allSliders = Slider::where('is_active',1)->where('is_deleted',1)->get();
        return view('frontend.home.index', compact('allSliders'));
    }
    // other frontend methods will go here
    public function about()
    {
        return view('frontend.about.index');
    }
    // other frontend methods will go here
    public function contact()
    {
        return view('frontend.contact.index');  
    }
    // other frontend methods will go here
    public  function faq()
    {
        return view('frontend.faqs.index');  
    }

    // other frontend methods will go here
    public function team()
    {
        $allTeams=OurTeam::where('is_deleted',1)->where('is_active',1)->orderBy('id','ASC')->get();
        return view('frontend.team.index', compact('allTeams'));  
    }
    // other frontend methods will go here
    public function gallery()
    {
        $allGallery=Gallery::where('is_deleted',1)->where('is_active',1)->orderBy('id','DESC')->get();
        return view('frontend.gallery.index', compact('allGallery'));
    }
    // other frontend methods will go here
    public function mission()
    {
        $mission=Mission::first();
        return view('frontend.mission.index', compact('mission'));
    }
    // other frontend methods will go here
    public function whoWeAre()
    {
        return view('frontend.who-we-are.index');
    }
    // other frontend methods will go here
    public function partner()
    {
        return view('frontend.partner.index');
    }
    // 
    public function whyChoiceUs()
    {
        return view('frontend.why-choice-us.index');
    }
    // other frontend methods will go here
    public function eligibility()
    {
        return view('frontend.eligibility.index');
    }
    // 
    public function financialAids()
    {
        return view('frontend.financial-aids.index');
    }
    // 
    public function blogs()
    {
        $allBlogs=Blog::where('is_deleted',1)->where('is_active',1)->orderBy('id','DESC')->paginate(6);
        return view('frontend.blogs.index', compact('allBlogs'));
    }
    // other frontend methods will go here
    public function blogDetail($id)
    {   

        $blogs=Blog::find($id);
        $popularBlogs=Blog::where('is_deleted',1)->where('is_active',1)->orderBy('id','DESC')->limit(5)->get();
        $allCategories=Category::where('is_deleted',1)->where('is_active',1)->orderBy('id','DESC')->get();
        return view('frontend.blogs.details', compact('blogs', 'popularBlogs', 'allCategories'));
    
    }

    // study-options
    public function studyOptions()
    {
        return view('frontend.study-options.index');
    }

    // events
    public function events()
    {
        $allEvents=Event::where('is_deleted',1)->where('is_active',1)->orderBy('id','DESC')->paginate(6);
        return view('frontend.events.index', compact('allEvents'));
    }

    public function eventDetail($id)
    {
        $event=Event::find($id);
         $allCategories=Category::where('is_deleted',1)->where('is_active',1)->orderBy('id','DESC')->get();
        $popularBlogs=Event::where('is_deleted',1)->where('is_active',1)->orderBy('id','DESC')->limit(5)->get();
        return view('frontend.events.details', compact('event', 'popularBlogs', 'allCategories'));
    }

    // application-support
    public function applicationSupport()
    {
        return view('frontend.application-support.index');  
    }
    // want-to-study-abroad
    public function wantToStudyAbroad()
    {
        return view('frontend.want-to-study-abroad.index');
    }

    // application-process

    public function applicationProcess()
    {
        return view('frontend.application-process.index');
    }
    // contact form submission
    public function submitContactForm(Request $request)
    {        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]); 
        // Here you can handle the form submission, such as sending an email or saving the data to the database 
        // For example, you can send an email using Laravel's Mail facade
        // insert into contact_messages table
        $insert=ContactMessage::insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        // Send a success response back to the frontend
        if($insert){
            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        }else{
            return redirect()->back()->with('error', 'There was an error sending your message. Please try again later.');
        }
    }
    // history
    public function history()
    {        $history = History::first();
        return view('frontend.history.index', compact('history'));
    }

    //
    public function success(){
        $success = OurSuccess::first();
        return view('frontend.success.index', compact('success'));
    }


    public function submitWantToStudyAbroadForm(Request $request)
    {
                // Get user IP address
                $ip = $request->ip();

                // Check how many times this IP has submitted
                $submissionCount = WantToStudyAbroad::where('ip_address', $ip)->count();

                if ($submissionCount >= 10) {
                    return redirect()->back()->with('error', 'You have reached the maximum submission limit (10 times).');
                }

                // Validate the form data
                $request->validate([
                    'name' => 'required|string|max:255',
                    'email' => 'required|email|max:255',
                    'phone' => 'required|string|max:20',
                    'country' => 'required|string|max:255',
                    'remarks' => 'required|string',
                ]);

                // Insert Data
                $insert = WantToStudyAbroad::insert([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'country' => $request->country,
                    'remarks' => $request->remarks,
                    'ip_address' => $ip,
                ]);

                if ($insert) {
                    return redirect()->back()->with('success', 'Your form has been submitted successfully!');
                } else {
                    return redirect()->back()->with('error', 'There was an error submitting your form. Please try again later.');
                }
    
    }


}
