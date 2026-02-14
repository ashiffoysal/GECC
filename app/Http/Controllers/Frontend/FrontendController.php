<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Models\Slider;

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
        return view('frontend.faq.index');  
    }

    // other frontend methods will go here
    public function team()
    {
        return view('frontend.team.index');  
    }
    // other frontend methods will go here
    public function gallery()
    {
        return view('frontend.gallery.index');
    }
    // other frontend methods will go here
    public function mission()
    {
        return view('frontend.mission.index');
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
        return view('frontend.blogs.index');
    }
    // other frontend methods will go here
    public function blogDetail($id)
    {
        return view('frontend.blogs.detail', compact('id'));
    }

    // study-options
    public function studyOptions()
    {
        return view('frontend.study-options.index');
    }

    // events
    public function events()
    {
        return view('frontend.events.index');
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
}
