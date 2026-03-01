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
use App\Models\FinanCialAid;
use App\Models\Level;
use App\Models\EligibilityFinanCialAid;
use App\Models\Prerequisites;
use App\Models\ApplicationSupport;
use App\Models\Subjects;
use App\Models\University;
use App\Models\Country;
use App\Models\CandidateApplication;
use App\Models\FreeCareerConsultant;
use Carbon\Carbon;



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
            $eligibility_financial_aid = EligibilityFinanCialAid::first();
            return view('frontend.eligibility.index', compact('eligibility_financial_aid'));
        
    }
    // 
    public function financialAids()
    {
        $financial_aid = FinanCialAid::first();
         return view('frontend.financial-aid.index', compact('financial_aid'));
    
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
        $allLevels=Level::where('is_deleted',1)->where('is_active',1)->orderBy('id','DESC')->get();
        return view('frontend.study-options.index', compact('allLevels'));
    }
    public function studyOptionsDetails($id)
    {
        $level=Level::find($id);
        return view('frontend.study-options.details', compact('level'));
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
            return redirect()->back()->with('success', 'Application Submitted Successfully!');
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

    // prerequisitesToStudyAbroad
        public function prerequisitesToStudyAbroad()
        { 
            $Prerequisites = Prerequisites::first();
            return view('frontend.prerequisites.index', compact('Prerequisites'));
        }

        // applicationSupport
        public function applicationSupportFrontend()
        { 
            $application_support = ApplicationSupport::first();
            return view('frontend.application-support.index', compact('application_support'));
        }


        // course finder
        public function courseFinder()
        {    
            
            $allCourses=Subjects::where('is_active',1)->orderBy('id','DESC')->paginate(10);
            $allSubjects=Subjects::where('is_active',1)->orderBy('id','DESC')->get();
           

            $allLevels=Level::where('is_active',1)->orderBy('id','DESC')->get();



            $allUniversities = University::where('is_active',1)
            ->withCount(['subjects' => function($query){
                $query->where('is_active',1);
            }])
            ->orderBy('id','DESC')
            ->get();
            return view('frontend.course-finder.index', compact('allCourses','allSubjects','allUniversities','allLevels'));
        }

        // couse apply
        public function courseApply($id)
        {   
            $course = Subjects::find($id);
            $universities = University::orderBy('id', 'ASC')->get();
            $levels = Level::orderBy('id', 'ASC')->get();
            $countries = Country::orderBy('id', 'ASC')->get();
            $allSubject = Subjects::where('is_active',1)->get();
            return view('frontend.course-finder.apply', compact('course','universities','levels','countries','allSubject'));
        }


        // application submit
        public function submitCourseApplication(Request $request)
        {            // Validate the form data
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:20',
                'country' => 'required|string|max:255',
                'application_type' => 'required|string|max:255',
                'subject' => 'required|string|max:255',
                'university' => 'required|string|max:255',
                'passing_year' => 'required|integer',
                'major_subjects' => 'required|string',
            ]);
            // Insert Data
            $insert = ApplicationSupport::insert([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'home_phone'=> $request->home_phone,
                'address' => $request->address,
                'post_code' => $request->post_code,
                'english_proficiency' => $request->english_proficiency,
                'study_gap' => $request->study_gap,
                'passing_year' => $request->passing_year,
                'country' => $request->country,
                'application_type' => $request->application_type,
                'subject' => $request->subject,
                'university' => $request->university,
                'major_subjects' => $request->major_subjects,
            ]);
            if ($insert) {
                return redirect()->back()->with('success', 'Your application has been submitted successfully!');
            } else {
                return redirect()->back()->with('error', 'There was an error submitting your application. Please try again later.');
            }

        }

        // course application submit


        public function courseApplySubmit(Request $request, $id)
        {

            // Validate the form data
            $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:20',
                'qualification' => 'required|string|max:255',
                'english_test' => 'required|string|max:255',
                'preferred_country' => 'required|string|max:255',
                'study_level' => 'required|string|max:255',
                'preferred_university' => 'required|string|max:255',
                'personal_statement' => 'required|string',
            ]);
            // Insert Data
            $insert = CandidateApplication::insert([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'qualification' => $request->qualification,
                'english_test' => $request->english_test,
                'preferred_country' => $request->preferred_country,
                'study_level' => $request->study_level,
                'preferred_university' => $request->preferred_university,
                'personal_statement' => $request->personal_statement,
                'created_at' => Carbon::now()->toDateTimeString(),
            ]);
            if ($insert) {
               return response()->json([
                    'status' => true,
                    'message' => 'Application submitted successfully!'
                ]);
                            } else {
                            return response()->json([
                    'status' => false,
                    'message' => 'Application submission failed. Please try again.'
                ]);
                            }
        }


        // course search
       public function search(Request $request)
            {   
                $query = Subjects::with('alluniversity');

                if ($request->level_id) {
                    $query->where('level', $request->level_id);
                }

                if ($request->study_method) {
                    $query->where('method_of_study', $request->study_method);
                }

                if ($request->subject_id) {
                    $query->where('id', $request->subject_id);
                }

                if ($request->university_id) {
                    $query->where('university', $request->university_id);
                }

                $allCourses = $query->paginate(100)->appends($request->all());

                if ($request->ajax()) {
                    return view('frontend.course-finder.partials.course_list', compact('allCourses'))->render();
                }

                return view('frontend.course-finder.index', compact('allCourses'));
            }

    // free career consultant
    public function freeCareerConsultant()
    {        $career = FreeCareerConsultant::first();
        return view('frontend.free-career-consultant.index', compact('career'));
    }

}
