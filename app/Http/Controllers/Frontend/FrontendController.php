<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.home.index');
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
}
