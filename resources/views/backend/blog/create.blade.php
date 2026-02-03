@extends('layouts.backend')
@section('title', 'Company Information')
@section('content')
    <section class="content" data-select2-id="select2-data-11-prc6">
        <div class="row">
            <div class="col-lg-8 col-12" data-select2-id="select2-data-10-a2dv">
                <div class="box" data-select2-id="select2-data-9-1wo6">
                    <div class="box-header with-border">
                        <h4 class="box-title">Create Team Member</h4>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data" data-select2-id="select2-data-8-mhk5">
                        <input type="hidden" name="_method" value="POST"> <input type="hidden" name="_token"
                            value="poaqX21fx6YeBFFozCZuWjmVeOosM401mfWUTqRc" autocomplete="off">
                        <div data-select2-id="select2-data-7-06ld">
                            <div class="box-body" data-select2-id="select2-data-6-nwe3">
                                <div class="row" data-select2-id="select2-data-5-na3v">
                                    <div class="col-lg-10 col-12">
                                        <div class="form-group">
                                            <label for="title" class="form-label">Team Member Name</label>
                                            <input type="text" name="title" id="title" value=""
                                                class="form-control" placeholder="Enter team member name">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-12">
                                        <div class="form-group">
                                            <label class="form-label" for="status">Status</label>
                                            <select name="status" id="status" class="form-select">
                                                <option value="">Select...</option>
                                                <option value="0">
                                                    Inactive
                                                </option>
                                                <option selected="" value="1">
                                                    Active
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label class="form-label" for="blog_category_id">Blog Categories</label>
                                            <select name="blog_category_id" id="blog_category_id" class="form-select">
                                                <option value="">Select...</option>
                                                <option value="1">
                                                    Adele Combs
                                                </option>
                                                <option value="2">
                                                    Education
                                                </option>
                                                <option value="3">
                                                    Past Paper
                                                </option>
                                                <option value="4">
                                                    GCSE
                                                </option>
                                                <option value="5">
                                                    A Level
                                                </option>
                                                <option value="6">
                                                    Edexcel Maths Past Papers
                                                </option>
                                                <option value="7">
                                                    Edexcel Past Papers
                                                </option>
                                                <option value="8">
                                                    GCSE Past Papers
                                                </option>
                                                <option value="9">
                                                    A-Level Past Papers
                                                </option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-12" data-select2-id="select2-data-4-yvq4">
                                        <div class="form-group" data-select2-id="select2-data-3-77kd">
                                            <label class="form-label" for="blog_tags">Tags</label>
                                            <select name="blog_tags[]" id="blog_tags" multiple=""
                                                class="form-select js-example-basic-single select2-hidden-accessible"
                                                data-select2-id="select2-data-blog_tags" tabindex="-1" aria-hidden="true">
                                                <option value="" data-select2-id="select2-data-13-v76i">Select...
                                                </option>
                                                <option value="Est dolorem lorem a" data-select2-id="select2-data-14-fyrf">
                                                    Est dolorem lorem a
                                                </option>
                                                <option value="Adipisicing ad conse" data-select2-id="select2-data-15-0hzf">
                                                    Adipisicing ad conse
                                                </option>
                                                <option value="1" data-select2-id="select2-data-16-dh9n">
                                                    1
                                                </option>
                                                <option value="Quod architecto sit" data-select2-id="select2-data-17-8qb7">
                                                    Quod architecto sit
                                                </option>
                                                <option value="GCSE revision tips" data-select2-id="select2-data-18-3wcp">
                                                    GCSE revision tips
                                                </option>
                                                <option value="A-Level past papers" data-select2-id="select2-data-19-rdrn">
                                                    A-Level past papers
                                                </option>
                                                <option value="exam success" data-select2-id="select2-data-20-cfzy">
                                                    exam success
                                                </option>
                                                <option value="5" data-select2-id="select2-data-21-suz8">
                                                    5
                                                </option>
                                                <option value="6" data-select2-id="select2-data-22-ucl1">
                                                    6
                                                </option>
                                                <option value="7" data-select2-id="select2-data-23-2qb7">
                                                    7
                                                </option>
                                                <option value="8" data-select2-id="select2-data-24-6ird">
                                                    8
                                                </option>
                                                <option value="9" data-select2-id="select2-data-25-3z8e">
                                                    9
                                                </option>
                                                <option value="10" data-select2-id="select2-data-26-jydv">
                                                    10
                                                </option>
                                                <option value="11" data-select2-id="select2-data-27-5nbr">
                                                    11
                                                </option>
                                                <option value="12" data-select2-id="select2-data-28-nxbz">
                                                    12
                                                </option>
                                                <option value="13" data-select2-id="select2-data-29-8ea1">
                                                    13
                                                </option>
                                                <option value="14" data-select2-id="select2-data-30-igfi">
                                                    14
                                                </option>
                                                <option value="15" data-select2-id="select2-data-31-y2pv">
                                                    15
                                                </option>
                                                <option value="16" data-select2-id="select2-data-32-sm3b">
                                                    16
                                                </option>
                                                <option value="17" data-select2-id="select2-data-33-tedc">
                                                    17
                                                </option>
                                                <option value="18" data-select2-id="select2-data-34-eq5b">
                                                    18
                                                </option>
                                                <option value="19" data-select2-id="select2-data-35-lsla">
                                                    19
                                                </option>
                                                <option value="Past Paper" data-select2-id="select2-data-36-cxbr">
                                                    Past Paper
                                                </option>
                                                <option value="exam formats" data-select2-id="select2-data-37-fo5z">
                                                    exam formats
                                                </option>
                                                <option value="Past Paper Practice"
                                                    data-select2-id="select2-data-38-9xhz">
                                                    Past Paper Practice
                                                </option>
                                                <option value="Top Past Papers" data-select2-id="select2-data-39-80c1">
                                                    Top Past Papers
                                                </option>
                                                <option value="GCSE Maths" data-select2-id="select2-data-40-k6hz">
                                                    GCSE Maths
                                                </option>
                                                <option value="GCSE past paper" data-select2-id="select2-data-41-ylzx">
                                                    GCSE past paper
                                                </option>
                                                <option value="28" data-select2-id="select2-data-42-323h">
                                                    28
                                                </option>
                                                <option value="Past Papers" data-select2-id="select2-data-43-vk88">
                                                    Past Papers
                                                </option>
                                                <option value="UK exam preparation tips"
                                                    data-select2-id="select2-data-44-um5f">
                                                    UK exam preparation tips
                                                </option>
                                                <option value="27" data-select2-id="select2-data-45-d0yn">
                                                    27
                                                </option>
                                                <option value="30" data-select2-id="select2-data-46-yms2">
                                                    30
                                                </option>
                                                <option value="AQA Biology past papers"
                                                    data-select2-id="select2-data-47-qo7o">
                                                    AQA Biology past papers
                                                </option>
                                                <option value="biology past papers"
                                                    data-select2-id="select2-data-48-3wiu">
                                                    biology past papers
                                                </option>
                                                <option value="free AQA biology past papers"
                                                    data-select2-id="select2-data-49-gnfs">
                                                    free AQA biology past papers
                                                </option>
                                                <option value="download biology past papers"
                                                    data-select2-id="select2-data-50-f8ag">
                                                    download biology past papers
                                                </option>
                                                <option value="GCSE biology past papers"
                                                    data-select2-id="select2-data-51-hvo0">
                                                    GCSE biology past papers
                                                </option>
                                                <option value="A-Level biology past papers"
                                                    data-select2-id="select2-data-52-ty4l">
                                                    A-Level biology past papers
                                                </option>
                                                <option value="Edexcel IGCSE Maths"
                                                    data-select2-id="select2-data-53-e9oi">
                                                    Edexcel IGCSE Maths
                                                </option>
                                                <option value="past paper" data-select2-id="select2-data-54-jcpj">
                                                    past paper
                                                </option>
                                                <option value="IGCSE revision" data-select2-id="select2-data-55-vqk2">
                                                    IGCSE revision
                                                </option>
                                                <option value="GCSE revision" data-select2-id="select2-data-56-m200">
                                                    GCSE revision
                                                </option>
                                                <option value="maths exam tips" data-select2-id="select2-data-57-xg7e">
                                                    maths exam tips
                                                </option>
                                                <option value="Merit Study Resources"
                                                    data-select2-id="select2-data-58-2kyl">
                                                    Merit Study Resources
                                                </option>
                                                <option value="AQA Grade Boundaries 2026"
                                                    data-select2-id="select2-data-59-arqh">
                                                    AQA Grade Boundaries 2026
                                                </option>
                                                <option value="AQA A Level Boundaries"
                                                    data-select2-id="select2-data-60-b7gm">
                                                    AQA A Level Boundaries
                                                </option>
                                                <option value="AQA Grading System" data-select2-id="select2-data-61-96ll">
                                                    AQA Grading System
                                                </option>
                                                <option value="AQA GCSE Grades" data-select2-id="select2-data-62-0zb2">
                                                    AQA GCSE Grades
                                                </option>
                                                <option value="UK Education" data-select2-id="select2-data-63-7hag">
                                                    UK Education
                                                </option>
                                                <option value="Heterotrophs" data-select2-id="select2-data-64-cegh">
                                                    Heterotrophs
                                                </option>
                                                <option value="types of heterotrophs"
                                                    data-select2-id="select2-data-65-eujp">
                                                    types of heterotrophs
                                                </option>
                                                <option value="heterotroph examples"
                                                    data-select2-id="select2-data-66-nok1">
                                                    heterotroph examples
                                                </option>
                                                <option value="autotrophs vs heterotrophs"
                                                    data-select2-id="select2-data-67-95im">
                                                    autotrophs vs heterotrophs
                                                </option>
                                                <option value="food chain" data-select2-id="select2-data-68-kbzy">
                                                    food chain
                                                </option>
                                                <option value="ecosystem energy flow"
                                                    data-select2-id="select2-data-69-e7lo">
                                                    ecosystem energy flow
                                                </option>
                                                <option value="Physics and Maths Tutor"
                                                    data-select2-id="select2-data-70-sugs">
                                                    Physics and Maths Tutor
                                                </option>
                                                <option value="Physics and Maths Tutor alternative"
                                                    data-select2-id="select2-data-71-qhr3">
                                                    Physics and Maths Tutor alternative
                                                </option>
                                                <option value="online study resources"
                                                    data-select2-id="select2-data-72-l8mq">
                                                    online study resources
                                                </option>
                                                <option value="GCSE revision timetable"
                                                    data-select2-id="select2-data-73-4n01">
                                                    GCSE revision timetable
                                                </option>
                                                <option value="A Level study planner"
                                                    data-select2-id="select2-data-74-9rj4">
                                                    A Level study planner
                                                </option>
                                                <option value="exam timetable template"
                                                    data-select2-id="select2-data-75-vcli">
                                                    exam timetable template
                                                </option>
                                                <option value="revision strategies UK"
                                                    data-select2-id="select2-data-76-3li6">
                                                    revision strategies UK
                                                </option>
                                                <option value="animal cell" data-select2-id="select2-data-77-8yzn">
                                                    animal cell
                                                </option>
                                                <option value="biology revision" data-select2-id="select2-data-78-3tda">
                                                    biology revision
                                                </option>
                                                <option value="GCSE science" data-select2-id="select2-data-79-uwny">
                                                    GCSE science
                                                </option>
                                                <option value="cell structure" data-select2-id="select2-data-80-eld2">
                                                    cell structure
                                                </option>
                                                <option value="cytoplasm" data-select2-id="select2-data-81-wvjq">
                                                    cytoplasm
                                                </option>
                                                <option value="GCSE past papers" data-select2-id="select2-data-82-jbh8">
                                                    GCSE past papers
                                                </option>
                                                <option value="exam preparation" data-select2-id="select2-data-83-l2lz">
                                                    exam preparation
                                                </option>
                                                <option value="GCSE study tips" data-select2-id="select2-data-84-eixz">
                                                    GCSE study tips
                                                </option>
                                                <option value="Infinity in Mathematics"
                                                    data-select2-id="select2-data-85-wzbl">
                                                    Infinity in Mathematics
                                                </option>
                                                <option value="calculus" data-select2-id="select2-data-86-pxcf">
                                                    calculus
                                                </option>
                                                <option value="geometry" data-select2-id="select2-data-87-v6ck">
                                                    geometry
                                                </option>
                                                <option value="SQA past papers" data-select2-id="select2-data-88-q7m2">
                                                    SQA past papers
                                                </option>
                                                <option value="National 5 past papers"
                                                    data-select2-id="select2-data-89-58dg">
                                                    National 5 past papers
                                                </option>
                                                <option value="Higher past papers" data-select2-id="select2-data-90-2cph">
                                                    Higher past papers
                                                </option>
                                                <option value="Advanced Higher past papers"
                                                    data-select2-id="select2-data-91-bw7i">
                                                    Advanced Higher past papers
                                                </option>
                                                <option value="SQA marking instructions"
                                                    data-select2-id="select2-data-92-pn6n">
                                                    SQA marking instructions
                                                </option>
                                                <option value="SQA specimen papers 2024"
                                                    data-select2-id="select2-data-93-lprv">
                                                    SQA specimen papers 2024
                                                </option>
                                                <option value="free past papers" data-select2-id="select2-data-94-jd86">
                                                    free past papers
                                                </option>
                                                <option value="Scottish qualifications"
                                                    data-select2-id="select2-data-95-n4m2">
                                                    Scottish qualifications
                                                </option>
                                                <option value="exam revision" data-select2-id="select2-data-96-yiq3">
                                                    exam revision
                                                </option>
                                                <option value="study resources" data-select2-id="select2-data-97-w6cc">
                                                    study resources
                                                </option>
                                                <option value="Save My Exams" data-select2-id="select2-data-98-ijle">
                                                    Save My Exams
                                                </option>
                                                <option value="Save My Exams review"
                                                    data-select2-id="select2-data-99-ppte">
                                                    Save My Exams review
                                                </option>
                                                <option value="Save My Exams alternative"
                                                    data-select2-id="select2-data-100-mang">
                                                    Save My Exams alternative
                                                </option>
                                                <option value="GCSE revision resources"
                                                    data-select2-id="select2-data-101-7ykk">
                                                    GCSE revision resources
                                                </option>
                                                <option value="GCSE study help" data-select2-id="select2-data-102-bgdw">
                                                    GCSE study help
                                                </option>
                                                <option value="free GCSE resources"
                                                    data-select2-id="select2-data-103-eh0f">
                                                    free GCSE resources
                                                </option>
                                                <option value="a level past papers"
                                                    data-select2-id="select2-data-104-cg01">
                                                    a level past papers
                                                </option>
                                                <option value="gcse past paper" data-select2-id="select2-data-105-5su8">
                                                    gcse past paper
                                                </option>
                                                <option value="AQA past papers" data-select2-id="select2-data-106-dfkr">
                                                    AQA past papers
                                                </option>
                                                <option value="AQA exam papers" data-select2-id="select2-data-107-7ina">
                                                    AQA exam papers
                                                </option>
                                                <option value="AQA revision" data-select2-id="select2-data-108-fdct">
                                                    AQA revision
                                                </option>
                                                <option value="exam preparation guide"
                                                    data-select2-id="select2-data-109-74mj">
                                                    exam preparation guide
                                                </option>
                                                <option value="AQA mark schemes" data-select2-id="select2-data-110-zyn1">
                                                    AQA mark schemes
                                                </option>
                                                <option value="examiner reports" data-select2-id="select2-data-111-sv5c">
                                                    examiner reports
                                                </option>
                                                <option value="exam technique" data-select2-id="select2-data-112-jrg4">
                                                    exam technique
                                                </option>
                                                <option value="past paper analysis"
                                                    data-select2-id="select2-data-113-6x3j">
                                                    past paper analysis
                                                </option>
                                                <option value="AQA assessments" data-select2-id="select2-data-114-t084">
                                                    AQA assessments
                                                </option>
                                                <option value="SUVAT equations" data-select2-id="select2-data-115-eu8k">
                                                    SUVAT equations
                                                </option>
                                                <option value="A Level Physics" data-select2-id="select2-data-116-zmpa">
                                                    A Level Physics
                                                </option>
                                                <option value="quations of motion"
                                                    data-select2-id="select2-data-117-gnv3">
                                                    quations of motion
                                                </option>
                                                <option value="constant acceleration"
                                                    data-select2-id="select2-data-118-q2wb">
                                                    constant acceleration
                                                </option>
                                                <option value="kinematics" data-select2-id="select2-data-119-qbz0">
                                                    kinematics
                                                </option>
                                                <option value="mechanics A level" data-select2-id="select2-data-120-lvpc">
                                                    mechanics A level
                                                </option>
                                                <option value="physics motion" data-select2-id="select2-data-121-cihm">
                                                    physics motion
                                                </option>
                                                <option value="SUVAT examples" data-select2-id="select2-data-122-fnqg">
                                                    SUVAT examples
                                                </option>
                                                <option value="AQA physics mechanics"
                                                    data-select2-id="select2-data-123-b0do">
                                                    AQA physics mechanics
                                                </option>
                                                <option value="Edexcel physics kinematics"
                                                    data-select2-id="select2-data-124-wcqz">
                                                    Edexcel physics kinematics
                                                </option>
                                                <option value="OCR physics motion"
                                                    data-select2-id="select2-data-125-33o7">
                                                    OCR physics motion
                                                </option>
                                                <option value="A level physics revision"
                                                    data-select2-id="select2-data-126-8gzi">
                                                    A level physics revision
                                                </option>
                                                <option value="physics exam revision"
                                                    data-select2-id="select2-data-127-b5v8">
                                                    physics exam revision
                                                </option>
                                                <option value="unit circle" data-select2-id="select2-data-128-44ir">
                                                    unit circle
                                                </option>
                                                <option value="trigonometry" data-select2-id="select2-data-129-hgp6">
                                                    trigonometry
                                                </option>
                                                <option value="GCSE maths" data-select2-id="select2-data-130-tmyq">
                                                    GCSE maths
                                                </option>
                                                <option value="A-Level maths" data-select2-id="select2-data-131-2x6o">
                                                    A-Level maths
                                                </option>
                                                <option value="radians" data-select2-id="select2-data-132-4kua">
                                                    radians
                                                </option>
                                                <option value="exact values" data-select2-id="select2-data-133-i8gj">
                                                    exact values
                                                </option>
                                                <option value="sine cosine tangent"
                                                    data-select2-id="select2-data-134-xolo">
                                                    sine cosine tangent
                                                </option>
                                                <option value="ASTC rule" data-select2-id="select2-data-135-3xg2">
                                                    ASTC rule
                                                </option>
                                                <option value="mark schemes" data-select2-id="select2-data-136-11u2">
                                                    mark schemes
                                                </option>
                                                <option value="GCSE" data-select2-id="select2-data-137-9ppi">
                                                    GCSE
                                                </option>
                                                <option value="revision strategy" data-select2-id="select2-data-138-ysy7">
                                                    revision strategy
                                                </option>
                                                <option value="grade booster" data-select2-id="select2-data-139-tavp">
                                                    grade booster
                                                </option>
                                                <option value="AQA Grade Boundaries"
                                                    data-select2-id="select2-data-140-uv1q">
                                                    AQA Grade Boundaries
                                                </option>
                                                <option value="AQA Grade Boundaries 2025"
                                                    data-select2-id="select2-data-141-lo3q">
                                                    AQA Grade Boundaries 2025
                                                </option>
                                                <option value="GCSE Results" data-select2-id="select2-data-142-dqpe">
                                                    GCSE Results
                                                </option>
                                                <option value="A-Level Results" data-select2-id="select2-data-143-9vah">
                                                    A-Level Results
                                                </option>
                                                <option value="Exam Results 2025" data-select2-id="select2-data-144-bww4">
                                                    Exam Results 2025
                                                </option>
                                                <option value="Private Candidates"
                                                    data-select2-id="select2-data-145-9dk6">
                                                    Private Candidates
                                                </option>
                                                <option value="UK Exams" data-select2-id="select2-data-146-l4wc">
                                                    UK Exams
                                                </option>
                                                <option value="A Level Biology" data-select2-id="select2-data-147-o7vh">
                                                    A Level Biology
                                                </option>
                                                <option value="A Level Biology topics"
                                                    data-select2-id="select2-data-148-w3xm">
                                                    A Level Biology topics
                                                </option>
                                                <option value="A Level Biology revision"
                                                    data-select2-id="select2-data-149-v0o2">
                                                    A Level Biology revision
                                                </option>
                                                <option value="A Level Biology exam practice"
                                                    data-select2-id="select2-data-150-9n1d">
                                                    A Level Biology exam practice
                                                </option>
                                                <option value="A Level Biology past papers"
                                                    data-select2-id="select2-data-151-jhhm">
                                                    A Level Biology past papers
                                                </option>
                                                <option value="A Level Biology guide"
                                                    data-select2-id="select2-data-152-lia8">
                                                    A Level Biology guide
                                                </option>
                                                <option value="June series past papers"
                                                    data-select2-id="select2-data-153-7r9r">
                                                    June series past papers
                                                </option>
                                                <option value="gcse past papers" data-select2-id="select2-data-154-kfqi">
                                                    gcse past papers
                                                </option>
                                                <option value="igcse past papers" data-select2-id="select2-data-155-wzlc">
                                                    igcse past papers
                                                </option>
                                                <option value="as level past papers"
                                                    data-select2-id="select2-data-156-qy9z">
                                                    as level past papers
                                                </option>
                                                <option value="past papers for june exams"
                                                    data-select2-id="select2-data-157-v1qw">
                                                    past papers for june exams
                                                </option>
                                                <option value="june exam series 2026"
                                                    data-select2-id="select2-data-158-1i27">
                                                    june exam series 2026
                                                </option>
                                                <option value="past paper 2024" data-select2-id="select2-data-159-hvwb">
                                                    past paper 2024
                                                </option>
                                                <option value="edexcel maths past papers"
                                                    data-select2-id="select2-data-160-vrye">
                                                    edexcel maths past papers
                                                </option>
                                                <option value="edexcel gcse maths past papers"
                                                    data-select2-id="select2-data-161-hi5e">
                                                    edexcel gcse maths past papers
                                                </option>
                                                <option value="edexcel igcse maths past papers"
                                                    data-select2-id="select2-data-162-527u">
                                                    edexcel igcse maths past papers
                                                </option>
                                                <option value="edexcel a level maths past papers"
                                                    data-select2-id="select2-data-163-y3w4">
                                                    edexcel a level maths past papers
                                                </option>
                                                <option value="edexcel maths mark scheme"
                                                    data-select2-id="select2-data-164-36wf">
                                                    edexcel maths mark scheme
                                                </option>
                                                <option value="english gcse past papers"
                                                    data-select2-id="select2-data-165-rhq3">
                                                    english gcse past papers
                                                </option>
                                                <option value="gcse english language"
                                                    data-select2-id="select2-data-166-cz5m">
                                                    gcse english language
                                                </option>
                                                <option value="gcse exam preparation"
                                                    data-select2-id="select2-data-167-vdee">
                                                    gcse exam preparation
                                                </option>
                                                <option value="english gcse revision"
                                                    data-select2-id="select2-data-168-4blk">
                                                    english gcse revision
                                                </option>
                                                <option value="gcse past papers pdf"
                                                    data-select2-id="select2-data-169-ewq8">
                                                    gcse past papers pdf
                                                </option>
                                                <option value="gcse english practice papers"
                                                    data-select2-id="select2-data-170-pwg0">
                                                    gcse english practice papers
                                                </option>
                                                <option value="uk gcse exam" data-select2-id="select2-data-171-zvzl">
                                                    uk gcse exam
                                                </option>
                                                <option value="english exam practice"
                                                    data-select2-id="select2-data-172-nmsm">
                                                    english exam practice
                                                </option>
                                                <option value="gcse english language past papers"
                                                    data-select2-id="select2-data-173-zmuw">
                                                    gcse english language past papers
                                                </option>
                                                <option value="gcse english exam practice"
                                                    data-select2-id="select2-data-174-rxu8">
                                                    gcse english exam practice
                                                </option>
                                                <option value="gcse past papers uk"
                                                    data-select2-id="select2-data-175-hk0u">
                                                    gcse past papers uk
                                                </option>
                                                <option value="gcse english revision"
                                                    data-select2-id="select2-data-176-v6nd">
                                                    gcse english revision
                                                </option>
                                                <option value="a level english past papers"
                                                    data-select2-id="select2-data-177-8iw5">
                                                    a level english past papers
                                                </option>
                                                <option value="a level english revision"
                                                    data-select2-id="select2-data-178-u1cg">
                                                    a level english revision
                                                </option>
                                                <option value="a level english exam preparation"
                                                    data-select2-id="select2-data-179-5a38">
                                                    a level english exam preparation
                                                </option>
                                                <option value="aqa a level english past papers"
                                                    data-select2-id="select2-data-180-nypu">
                                                    aqa a level english past papers
                                                </option>
                                                <option value="edexcel a level english past papers"
                                                    data-select2-id="select2-data-181-gi4g">
                                                    edexcel a level english past papers
                                                </option>
                                                <option value="how to revise for a level english"
                                                    data-select2-id="select2-data-182-5dik">
                                                    how to revise for a level english
                                                </option>
                                                <option value="gcse maths past papers"
                                                    data-select2-id="select2-data-183-77ej">
                                                    gcse maths past papers
                                                </option>
                                                <option value="gcse maths revision"
                                                    data-select2-id="select2-data-184-slej">
                                                    gcse maths revision
                                                </option>
                                                <option value="gcse maths exam practice"
                                                    data-select2-id="select2-data-185-y6jj">
                                                    gcse maths exam practice
                                                </option>
                                                <option value="gcse maths calculator paper"
                                                    data-select2-id="select2-data-186-1eg8">
                                                    gcse maths calculator paper
                                                </option>
                                                <option value="gcse maths non calculator paper"
                                                    data-select2-id="select2-data-187-1x9c">
                                                    gcse maths non calculator paper
                                                </option>
                                                <option value="gcse maths resit" data-select2-id="select2-data-188-bh7f">
                                                    gcse maths resit
                                                </option>
                                            </select><span
                                                class="select2 select2-container select2-container--bootstrap-5 select2-container--below"
                                                dir="ltr" data-select2-id="select2-data-1-j4hj"
                                                style="width: 500.984px;"><span class="selection"><span
                                                        class="select2-selection select2-selection--multiple"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="-1" aria-disabled="false">
                                                        <ul class="select2-selection__rendered"
                                                            id="select2-blog_tags-container"></ul><span
                                                            class="select2-search select2-search--inline">
                                                            <textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none"
                                                                spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search"
                                                                aria-describedby="select2-blog_tags-container" placeholder="" style="width: 0.75em;"></textarea>
                                                        </span>
                                                    </span></span><span class="dropdown-wrapper"
                                                    aria-hidden="true"></span></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label class="form-label" for="blog_image">Image</label>
                                            <input type="file" accept="image/*" name="blog_image" id="blog_image"
                                                class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label class="form-label" for="description">Blog Description</label>
                                            <textarea class="form-control" placeholder="Type the content here!" id="description" name="description"
                                                rows="4"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label class="form-label" for="blog_category_id">Blog Content</label>
                                            <textarea placeholder="Type the content here!" id="editor1" name="details" rows="10" cols="80"
                                                style="visibility: hidden; display: none;"></textarea>
                                            <div id="cke_editor1"
                                                class="cke_1 cke cke_reset cke_chrome cke_editor_editor1 cke_ltr cke_browser_webkit"
                                                dir="ltr" lang="en" role="application"
                                                aria-labelledby="cke_editor1_arialbl"><span id="cke_editor1_arialbl"
                                                    class="cke_voice_label">Rich Text Editor, editor1</span>
                                                <div class="cke_inner cke_reset" role="presentation"><span id="cke_1_top"
                                                        class="cke_top cke_reset_all" role="presentation"
                                                        style="height: auto; user-select: none;"><span id="cke_12"
                                                            class="cke_voice_label">Editor toolbars</span><span
                                                            id="cke_1_toolbox" class="cke_toolbox" role="group"
                                                            aria-labelledby="cke_12" onmousedown="return false;"><span
                                                                id="cke_17" class="cke_toolbar"
                                                                aria-labelledby="cke_17_label" role="toolbar"><span
                                                                    id="cke_17_label"
                                                                    class="cke_voice_label">Document</span><span
                                                                    class="cke_toolbar_start"></span><span
                                                                    class="cke_toolgroup" role="presentation"><a
                                                                        id="cke_18"
                                                                        class="cke_button cke_button__source cke_button_off"
                                                                        href="javascript:void('Source')" title="Source"
                                                                        tabindex="-1" hidefocus="true" role="button"
                                                                        aria-labelledby="cke_18_label"
                                                                        aria-describedby="cke_18_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(2,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(3,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(4,this);return false;"><span
                                                                            class="cke_button_icon cke_button__source_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -1848px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_18_label"
                                                                            class="cke_button_label cke_button__source_label"
                                                                            aria-hidden="false">Source</span><span
                                                                            id="cke_18_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><span
                                                                        class="cke_toolbar_separator"
                                                                        role="separator"></span><a id="cke_19"
                                                                        class="cke_button cke_button__save cke_button_off"
                                                                        href="javascript:void('Save')" title="Save"
                                                                        tabindex="-1" hidefocus="true" role="button"
                                                                        aria-labelledby="cke_19_label"
                                                                        aria-describedby="cke_19_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(5,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(6,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(7,this);return false;"><span
                                                                            class="cke_button_icon cke_button__save_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -1728px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_19_label"
                                                                            class="cke_button_label cke_button__save_label"
                                                                            aria-hidden="false">Save</span><span
                                                                            id="cke_19_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a
                                                                        id="cke_20"
                                                                        class="cke_button cke_button__newpage cke_button_off"
                                                                        href="javascript:void('New Page')"
                                                                        title="New Page" tabindex="-1" hidefocus="true"
                                                                        role="button" aria-labelledby="cke_20_label"
                                                                        aria-describedby="cke_20_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(8,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(9,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(10,this);return false;"><span
                                                                            class="cke_button_icon cke_button__newpage_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -1464px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_20_label"
                                                                            class="cke_button_label cke_button__newpage_label"
                                                                            aria-hidden="false">New Page</span><span
                                                                            id="cke_20_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a
                                                                        id="cke_21"
                                                                        class="cke_button cke_button__preview cke_button_off"
                                                                        href="javascript:void('Preview')" title="Preview"
                                                                        tabindex="-1" hidefocus="true" role="button"
                                                                        aria-labelledby="cke_21_label"
                                                                        aria-describedby="cke_21_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(11,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(12,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(13,this);return false;"><span
                                                                            class="cke_button_icon cke_button__preview_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -1656px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_21_label"
                                                                            class="cke_button_label cke_button__preview_label"
                                                                            aria-hidden="false">Preview</span><span
                                                                            id="cke_21_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a
                                                                        id="cke_22"
                                                                        class="cke_button cke_button__print cke_button_off"
                                                                        href="javascript:void('Print')" title="Print"
                                                                        tabindex="-1" hidefocus="true" role="button"
                                                                        aria-labelledby="cke_22_label"
                                                                        aria-describedby="cke_22_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(14,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(15,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(16,this);return false;"><span
                                                                            class="cke_button_icon cke_button__print_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -1680px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_22_label"
                                                                            class="cke_button_label cke_button__print_label"
                                                                            aria-hidden="false">Print</span><span
                                                                            id="cke_22_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><span
                                                                        class="cke_toolbar_separator"
                                                                        role="separator"></span><a id="cke_23"
                                                                        class="cke_button cke_button__templates cke_button_off"
                                                                        href="javascript:void('Templates')"
                                                                        title="Templates" tabindex="-1" hidefocus="true"
                                                                        role="button" aria-labelledby="cke_23_label"
                                                                        aria-describedby="cke_23_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(17,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(18,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(19,this);return false;"><span
                                                                            class="cke_button_icon cke_button__templates_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -456px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_23_label"
                                                                            class="cke_button_label cke_button__templates_label"
                                                                            aria-hidden="false">Templates</span><span
                                                                            id="cke_23_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a></span><span
                                                                    class="cke_toolbar_end"></span></span><span
                                                                id="cke_24" class="cke_toolbar"
                                                                aria-labelledby="cke_24_label" role="toolbar"><span
                                                                    id="cke_24_label"
                                                                    class="cke_voice_label">Clipboard/Undo</span><span
                                                                    class="cke_toolbar_start"></span><span
                                                                    class="cke_toolgroup" role="presentation"><a
                                                                        id="cke_25"
                                                                        class="cke_button cke_button__cut cke_button_disabled "
                                                                        href="javascript:void('Cut')" title="Cut (Ctrl+X)"
                                                                        tabindex="-1" hidefocus="true" role="button"
                                                                        aria-labelledby="cke_25_label"
                                                                        aria-describedby="cke_25_description"
                                                                        aria-haspopup="false" aria-disabled="true"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(20,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(21,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(22,this);return false;"><span
                                                                            class="cke_button_icon cke_button__cut_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -312px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_25_label"
                                                                            class="cke_button_label cke_button__cut_label"
                                                                            aria-hidden="false">Cut</span><span
                                                                            id="cke_25_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false">Keyboard shortcut
                                                                            Ctrl+X</span></a><a id="cke_26"
                                                                        class="cke_button cke_button__copy cke_button_disabled "
                                                                        href="javascript:void('Copy')"
                                                                        title="Copy (Ctrl+C)" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_26_label"
                                                                        aria-describedby="cke_26_description"
                                                                        aria-haspopup="false" aria-disabled="true"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(23,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(24,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(25,this);return false;"><span
                                                                            class="cke_button_icon cke_button__copy_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -264px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_26_label"
                                                                            class="cke_button_label cke_button__copy_label"
                                                                            aria-hidden="false">Copy</span><span
                                                                            id="cke_26_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false">Keyboard shortcut
                                                                            Ctrl+C</span></a><a id="cke_27"
                                                                        class="cke_button cke_button__paste cke_button_off"
                                                                        href="javascript:void('Paste')"
                                                                        title="Paste (Ctrl+V)" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_27_label"
                                                                        aria-describedby="cke_27_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(26,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(27,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(28,this);return false;"><span
                                                                            class="cke_button_icon cke_button__paste_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -360px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_27_label"
                                                                            class="cke_button_label cke_button__paste_label"
                                                                            aria-hidden="false">Paste</span><span
                                                                            id="cke_27_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false">Keyboard shortcut
                                                                            Ctrl+V</span></a><a id="cke_28"
                                                                        class="cke_button cke_button__pastetext cke_button_off"
                                                                        href="javascript:void('Paste as plain text')"
                                                                        title="Paste as plain text (Ctrl+Shift+V)"
                                                                        tabindex="-1" hidefocus="true" role="button"
                                                                        aria-labelledby="cke_28_label"
                                                                        aria-describedby="cke_28_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(29,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(30,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(31,this);return false;"><span
                                                                            class="cke_button_icon cke_button__pastetext_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -1560px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_28_label"
                                                                            class="cke_button_label cke_button__pastetext_label"
                                                                            aria-hidden="false">Paste as plain
                                                                            text</span><span id="cke_28_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false">Keyboard shortcut
                                                                            Ctrl+Shift+V</span></a><a id="cke_29"
                                                                        class="cke_button cke_button__pastefromword cke_button_off"
                                                                        href="javascript:void('Paste from Word')"
                                                                        title="Paste from Word" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_29_label"
                                                                        aria-describedby="cke_29_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(32,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(33,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(34,this);return false;"><span
                                                                            class="cke_button_icon cke_button__pastefromword_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -1608px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_29_label"
                                                                            class="cke_button_label cke_button__pastefromword_label"
                                                                            aria-hidden="false">Paste from Word</span><span
                                                                            id="cke_29_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><span
                                                                        class="cke_toolbar_separator"
                                                                        role="separator"></span><a id="cke_30"
                                                                        class="cke_button cke_button__undo cke_button_disabled "
                                                                        href="javascript:void('Undo')"
                                                                        title="Undo (Ctrl+Z)" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_30_label"
                                                                        aria-describedby="cke_30_description"
                                                                        aria-haspopup="false" aria-disabled="true"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(35,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(36,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(37,this);return false;"><span
                                                                            class="cke_button_icon cke_button__undo_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -2016px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_30_label"
                                                                            class="cke_button_label cke_button__undo_label"
                                                                            aria-hidden="false">Undo</span><span
                                                                            id="cke_30_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false">Keyboard shortcut
                                                                            Ctrl+Z</span></a><a id="cke_31"
                                                                        class="cke_button cke_button__redo cke_button_disabled "
                                                                        href="javascript:void('Redo')"
                                                                        title="Redo (Ctrl+Y)" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_31_label"
                                                                        aria-describedby="cke_31_description"
                                                                        aria-haspopup="false" aria-disabled="true"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(38,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(39,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(40,this);return false;"><span
                                                                            class="cke_button_icon cke_button__redo_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -1968px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_31_label"
                                                                            class="cke_button_label cke_button__redo_label"
                                                                            aria-hidden="false">Redo</span><span
                                                                            id="cke_31_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false">Keyboard shortcut
                                                                            Ctrl+Y</span></a></span><span
                                                                    class="cke_toolbar_end"></span></span><span
                                                                id="cke_32" class="cke_toolbar"
                                                                aria-labelledby="cke_32_label" role="toolbar"><span
                                                                    id="cke_32_label"
                                                                    class="cke_voice_label">Editing</span><span
                                                                    class="cke_toolbar_start"></span><span
                                                                    class="cke_toolgroup" role="presentation"><a
                                                                        id="cke_33"
                                                                        class="cke_button cke_button__find cke_button_off"
                                                                        href="javascript:void('Find')" title="Find"
                                                                        tabindex="-1" hidefocus="true" role="button"
                                                                        aria-labelledby="cke_33_label"
                                                                        aria-describedby="cke_33_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(41,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(42,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(43,this);return false;"><span
                                                                            class="cke_button_icon cke_button__find_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -552px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_33_label"
                                                                            class="cke_button_label cke_button__find_label"
                                                                            aria-hidden="false">Find</span><span
                                                                            id="cke_33_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a
                                                                        id="cke_34"
                                                                        class="cke_button cke_button__replace cke_button_off"
                                                                        href="javascript:void('Replace')" title="Replace"
                                                                        tabindex="-1" hidefocus="true" role="button"
                                                                        aria-labelledby="cke_34_label"
                                                                        aria-describedby="cke_34_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(44,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(45,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(46,this);return false;"><span
                                                                            class="cke_button_icon cke_button__replace_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -576px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_34_label"
                                                                            class="cke_button_label cke_button__replace_label"
                                                                            aria-hidden="false">Replace</span><span
                                                                            id="cke_34_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><span
                                                                        class="cke_toolbar_separator"
                                                                        role="separator"></span><a id="cke_35"
                                                                        class="cke_button cke_button__selectall cke_button_off"
                                                                        href="javascript:void('Select All')"
                                                                        title="Select All" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_35_label"
                                                                        aria-describedby="cke_35_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(47,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(48,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(49,this);return false;"><span
                                                                            class="cke_button_icon cke_button__selectall_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -1752px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_35_label"
                                                                            class="cke_button_label cke_button__selectall_label"
                                                                            aria-hidden="false">Select All</span><span
                                                                            id="cke_35_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><span
                                                                        class="cke_toolbar_separator"
                                                                        role="separator"></span><a id="cke_36"
                                                                        class="cke_button cke_button__scayt cke_button_off"
                                                                        href="javascript:void('Spell Checker')"
                                                                        title="Spell Checker" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_36_label"
                                                                        aria-describedby="cke_36_description"
                                                                        aria-haspopup="true"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(50,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(51,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(52,this);return false;"><span
                                                                            class="cke_button_icon cke_button__scayt_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -1896px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_36_label"
                                                                            class="cke_button_label cke_button__scayt_label"
                                                                            aria-hidden="false">Spell Check As You
                                                                            Type</span><span id="cke_36_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span><span
                                                                            class="cke_button_arrow"></span></a></span><span
                                                                    class="cke_toolbar_end"></span></span><span
                                                                id="cke_37" class="cke_toolbar cke_toolbar_last"
                                                                aria-labelledby="cke_37_label" role="toolbar"><span
                                                                    id="cke_37_label"
                                                                    class="cke_voice_label">Forms</span><span
                                                                    class="cke_toolbar_start"></span><span
                                                                    class="cke_toolgroup" role="presentation"><a
                                                                        id="cke_38"
                                                                        class="cke_button cke_button__form cke_button_off"
                                                                        href="javascript:void('Form')" title="Form"
                                                                        tabindex="-1" hidefocus="true" role="button"
                                                                        aria-labelledby="cke_38_label"
                                                                        aria-describedby="cke_38_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(53,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(54,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(55,this);return false;"><span
                                                                            class="cke_button_icon cke_button__form_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -672px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_38_label"
                                                                            class="cke_button_label cke_button__form_label"
                                                                            aria-hidden="false">Form</span><span
                                                                            id="cke_38_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a
                                                                        id="cke_39"
                                                                        class="cke_button cke_button__checkbox cke_button_off"
                                                                        href="javascript:void('Checkbox')"
                                                                        title="Checkbox" tabindex="-1" hidefocus="true"
                                                                        role="button" aria-labelledby="cke_39_label"
                                                                        aria-describedby="cke_39_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(56,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(57,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(58,this);return false;"><span
                                                                            class="cke_button_icon cke_button__checkbox_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -648px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_39_label"
                                                                            class="cke_button_label cke_button__checkbox_label"
                                                                            aria-hidden="false">Checkbox</span><span
                                                                            id="cke_39_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a
                                                                        id="cke_40"
                                                                        class="cke_button cke_button__radio cke_button_off"
                                                                        href="javascript:void('Radio Button')"
                                                                        title="Radio Button" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_40_label"
                                                                        aria-describedby="cke_40_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(59,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(60,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(61,this);return false;"><span
                                                                            class="cke_button_icon cke_button__radio_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -744px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_40_label"
                                                                            class="cke_button_label cke_button__radio_label"
                                                                            aria-hidden="false">Radio Button</span><span
                                                                            id="cke_40_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a
                                                                        id="cke_41"
                                                                        class="cke_button cke_button__textfield cke_button_off"
                                                                        href="javascript:void('Text Field')"
                                                                        title="Text Field" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_41_label"
                                                                        aria-describedby="cke_41_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(62,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(63,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(64,this);return false;"><span
                                                                            class="cke_button_icon cke_button__textfield_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -888px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_41_label"
                                                                            class="cke_button_label cke_button__textfield_label"
                                                                            aria-hidden="false">Text Field</span><span
                                                                            id="cke_41_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a
                                                                        id="cke_42"
                                                                        class="cke_button cke_button__textarea cke_button_off"
                                                                        href="javascript:void('Textarea')"
                                                                        title="Textarea" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_42_label"
                                                                        aria-describedby="cke_42_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(65,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(66,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(67,this);return false;"><span
                                                                            class="cke_button_icon cke_button__textarea_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -840px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_42_label"
                                                                            class="cke_button_label cke_button__textarea_label"
                                                                            aria-hidden="false">Textarea</span><span
                                                                            id="cke_42_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a
                                                                        id="cke_43"
                                                                        class="cke_button cke_button__select cke_button_off"
                                                                        href="javascript:void('Selection Field')"
                                                                        title="Selection Field" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_43_label"
                                                                        aria-describedby="cke_43_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(68,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(69,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(70,this);return false;"><span
                                                                            class="cke_button_icon cke_button__select_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -792px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_43_label"
                                                                            class="cke_button_label cke_button__select_label"
                                                                            aria-hidden="false">Selection
                                                                            Field</span><span id="cke_43_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a
                                                                        id="cke_44"
                                                                        class="cke_button cke_button__button cke_button_off"
                                                                        href="javascript:void('Button')" title="Button"
                                                                        tabindex="-1" hidefocus="true" role="button"
                                                                        aria-labelledby="cke_44_label"
                                                                        aria-describedby="cke_44_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(71,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(72,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(73,this);return false;"><span
                                                                            class="cke_button_icon cke_button__button_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -624px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_44_label"
                                                                            class="cke_button_label cke_button__button_label"
                                                                            aria-hidden="false">Button</span><span
                                                                            id="cke_44_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a
                                                                        id="cke_45"
                                                                        class="cke_button cke_button__imagebutton cke_button_off"
                                                                        href="javascript:void('Image Button')"
                                                                        title="Image Button" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_45_label"
                                                                        aria-describedby="cke_45_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(74,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(75,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(76,this);return false;"><span
                                                                            class="cke_button_icon cke_button__imagebutton_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -720px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_45_label"
                                                                            class="cke_button_label cke_button__imagebutton_label"
                                                                            aria-hidden="false">Image Button</span><span
                                                                            id="cke_45_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a
                                                                        id="cke_46"
                                                                        class="cke_button cke_button__hiddenfield cke_button_off"
                                                                        href="javascript:void('Hidden Field')"
                                                                        title="Hidden Field" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_46_label"
                                                                        aria-describedby="cke_46_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(77,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(78,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(79,this);return false;"><span
                                                                            class="cke_button_icon cke_button__hiddenfield_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -696px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_46_label"
                                                                            class="cke_button_label cke_button__hiddenfield_label"
                                                                            aria-hidden="false">Hidden Field</span><span
                                                                            id="cke_46_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a></span><span
                                                                    class="cke_toolbar_end"></span></span><span
                                                                class="cke_toolbar_break"></span><span id="cke_47"
                                                                class="cke_toolbar" aria-labelledby="cke_47_label"
                                                                role="toolbar"><span id="cke_47_label"
                                                                    class="cke_voice_label">Basic Styles</span><span
                                                                    class="cke_toolbar_start"></span><span
                                                                    class="cke_toolgroup" role="presentation"><a
                                                                        id="cke_48"
                                                                        class="cke_button cke_button__bold cke_button_off"
                                                                        href="javascript:void('Bold')"
                                                                        title="Bold (Ctrl+B)" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_48_label"
                                                                        aria-describedby="cke_48_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(80,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(81,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(82,this);return false;"><span
                                                                            class="cke_button_icon cke_button__bold_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -24px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_48_label"
                                                                            class="cke_button_label cke_button__bold_label"
                                                                            aria-hidden="false">Bold</span><span
                                                                            id="cke_48_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false">Keyboard shortcut
                                                                            Ctrl+B</span></a><a id="cke_49"
                                                                        class="cke_button cke_button__italic cke_button_off"
                                                                        href="javascript:void('Italic')"
                                                                        title="Italic (Ctrl+I)" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_49_label"
                                                                        aria-describedby="cke_49_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(83,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(84,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(85,this);return false;"><span
                                                                            class="cke_button_icon cke_button__italic_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -48px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_49_label"
                                                                            class="cke_button_label cke_button__italic_label"
                                                                            aria-hidden="false">Italic</span><span
                                                                            id="cke_49_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false">Keyboard shortcut
                                                                            Ctrl+I</span></a><a id="cke_50"
                                                                        class="cke_button cke_button__underline cke_button_off"
                                                                        href="javascript:void('Underline')"
                                                                        title="Underline (Ctrl+U)" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_50_label"
                                                                        aria-describedby="cke_50_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(86,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(87,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(88,this);return false;"><span
                                                                            class="cke_button_icon cke_button__underline_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -144px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_50_label"
                                                                            class="cke_button_label cke_button__underline_label"
                                                                            aria-hidden="false">Underline</span><span
                                                                            id="cke_50_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false">Keyboard shortcut
                                                                            Ctrl+U</span></a><a id="cke_51"
                                                                        class="cke_button cke_button__strike cke_button_off"
                                                                        href="javascript:void('Strikethrough')"
                                                                        title="Strikethrough" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_51_label"
                                                                        aria-describedby="cke_51_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(89,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(90,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(91,this);return false;"><span
                                                                            class="cke_button_icon cke_button__strike_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -72px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_51_label"
                                                                            class="cke_button_label cke_button__strike_label"
                                                                            aria-hidden="false">Strikethrough</span><span
                                                                            id="cke_51_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a
                                                                        id="cke_52"
                                                                        class="cke_button cke_button__subscript cke_button_off"
                                                                        href="javascript:void('Subscript')"
                                                                        title="Subscript" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_52_label"
                                                                        aria-describedby="cke_52_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(92,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(93,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(94,this);return false;"><span
                                                                            class="cke_button_icon cke_button__subscript_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -96px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_52_label"
                                                                            class="cke_button_label cke_button__subscript_label"
                                                                            aria-hidden="false">Subscript</span><span
                                                                            id="cke_52_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a
                                                                        id="cke_53"
                                                                        class="cke_button cke_button__superscript cke_button_off"
                                                                        href="javascript:void('Superscript')"
                                                                        title="Superscript" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_53_label"
                                                                        aria-describedby="cke_53_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(95,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(96,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(97,this);return false;"><span
                                                                            class="cke_button_icon cke_button__superscript_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -120px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_53_label"
                                                                            class="cke_button_label cke_button__superscript_label"
                                                                            aria-hidden="false">Superscript</span><span
                                                                            id="cke_53_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><span
                                                                        class="cke_toolbar_separator"
                                                                        role="separator"></span><a id="cke_54"
                                                                        class="cke_button cke_button__copyformatting cke_button_off"
                                                                        href="javascript:void('Copy Formatting')"
                                                                        title="Copy Formatting (Ctrl+Shift+C)"
                                                                        tabindex="-1" hidefocus="true" role="button"
                                                                        aria-labelledby="cke_54_label"
                                                                        aria-describedby="cke_54_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(98,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(99,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(100,this);return false;"><span
                                                                            class="cke_button_icon cke_button__copyformatting_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -480px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_54_label"
                                                                            class="cke_button_label cke_button__copyformatting_label"
                                                                            aria-hidden="false">Copy
                                                                            Formatting</span><span id="cke_54_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false">Keyboard shortcut
                                                                            Ctrl+Shift+C</span></a><a id="cke_55"
                                                                        class="cke_button cke_button__removeformat cke_button_off"
                                                                        href="javascript:void('Remove Format')"
                                                                        title="Remove Format" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_55_label"
                                                                        aria-describedby="cke_55_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(101,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(102,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(103,this);return false;"><span
                                                                            class="cke_button_icon cke_button__removeformat_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -1704px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_55_label"
                                                                            class="cke_button_label cke_button__removeformat_label"
                                                                            aria-hidden="false">Remove Format</span><span
                                                                            id="cke_55_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a></span><span
                                                                    class="cke_toolbar_end"></span></span><span
                                                                id="cke_56" class="cke_toolbar"
                                                                aria-labelledby="cke_56_label" role="toolbar"><span
                                                                    id="cke_56_label"
                                                                    class="cke_voice_label">Paragraph</span><span
                                                                    class="cke_toolbar_start"></span><span
                                                                    class="cke_toolgroup" role="presentation"><a
                                                                        id="cke_57"
                                                                        class="cke_button cke_button__numberedlist cke_button_off"
                                                                        href="javascript:void('Insert/Remove Numbered List')"
                                                                        title="Insert/Remove Numbered List"
                                                                        tabindex="-1" hidefocus="true" role="button"
                                                                        aria-labelledby="cke_57_label"
                                                                        aria-describedby="cke_57_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(104,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(105,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(106,this);return false;"><span
                                                                            class="cke_button_icon cke_button__numberedlist_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -1392px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_57_label"
                                                                            class="cke_button_label cke_button__numberedlist_label"
                                                                            aria-hidden="false">Insert/Remove Numbered
                                                                            List</span><span id="cke_57_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a
                                                                        id="cke_58"
                                                                        class="cke_button cke_button__bulletedlist cke_button_off"
                                                                        href="javascript:void('Insert/Remove Bulleted List')"
                                                                        title="Insert/Remove Bulleted List"
                                                                        tabindex="-1" hidefocus="true" role="button"
                                                                        aria-labelledby="cke_58_label"
                                                                        aria-describedby="cke_58_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(107,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(108,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(109,this);return false;"><span
                                                                            class="cke_button_icon cke_button__bulletedlist_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -1344px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_58_label"
                                                                            class="cke_button_label cke_button__bulletedlist_label"
                                                                            aria-hidden="false">Insert/Remove Bulleted
                                                                            List</span><span id="cke_58_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><span
                                                                        class="cke_toolbar_separator"
                                                                        role="separator"></span><a id="cke_59"
                                                                        class="cke_button cke_button__outdent cke_button_disabled "
                                                                        href="javascript:void('Decrease Indent')"
                                                                        title="Decrease Indent" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_59_label"
                                                                        aria-describedby="cke_59_description"
                                                                        aria-haspopup="false" aria-disabled="true"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(110,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(111,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(112,this);return false;"><span
                                                                            class="cke_button_icon cke_button__outdent_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -1056px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_59_label"
                                                                            class="cke_button_label cke_button__outdent_label"
                                                                            aria-hidden="false">Decrease
                                                                            Indent</span><span id="cke_59_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a
                                                                        id="cke_60"
                                                                        class="cke_button cke_button__indent cke_button_off"
                                                                        href="javascript:void('Increase Indent')"
                                                                        title="Increase Indent" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_60_label"
                                                                        aria-describedby="cke_60_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(113,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(114,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(115,this);return false;"><span
                                                                            class="cke_button_icon cke_button__indent_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -1008px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_60_label"
                                                                            class="cke_button_label cke_button__indent_label"
                                                                            aria-hidden="false">Increase
                                                                            Indent</span><span id="cke_60_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><span
                                                                        class="cke_toolbar_separator"
                                                                        role="separator"></span><a id="cke_61"
                                                                        class="cke_button cke_button__blockquote cke_button_off"
                                                                        href="javascript:void('Block Quote')"
                                                                        title="Block Quote" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_61_label"
                                                                        aria-describedby="cke_61_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(116,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(117,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(118,this);return false;"><span
                                                                            class="cke_button_icon cke_button__blockquote_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -216px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_61_label"
                                                                            class="cke_button_label cke_button__blockquote_label"
                                                                            aria-hidden="false">Block Quote</span><span
                                                                            id="cke_61_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a
                                                                        id="cke_62"
                                                                        class="cke_button cke_button__creatediv cke_button_off"
                                                                        href="javascript:void('Create Div Container')"
                                                                        title="Create Div Container" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_62_label"
                                                                        aria-describedby="cke_62_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(119,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(120,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(121,this);return false;"><span
                                                                            class="cke_button_icon cke_button__creatediv_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -504px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_62_label"
                                                                            class="cke_button_label cke_button__creatediv_label"
                                                                            aria-hidden="false">Create Div
                                                                            Container</span><span id="cke_62_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><span
                                                                        class="cke_toolbar_separator"
                                                                        role="separator"></span><a id="cke_63"
                                                                        class="cke_button cke_button__justifyleft cke_button_off"
                                                                        href="javascript:void('Align Left')"
                                                                        title="Align Left" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_63_label"
                                                                        aria-describedby="cke_63_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(122,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(123,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(124,this);return false;"><span
                                                                            class="cke_button_icon cke_button__justifyleft_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -1152px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_63_label"
                                                                            class="cke_button_label cke_button__justifyleft_label"
                                                                            aria-hidden="false">Align Left</span><span
                                                                            id="cke_63_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a
                                                                        id="cke_64"
                                                                        class="cke_button cke_button__justifycenter cke_button_off"
                                                                        href="javascript:void('Center')" title="Center"
                                                                        tabindex="-1" hidefocus="true" role="button"
                                                                        aria-labelledby="cke_64_label"
                                                                        aria-describedby="cke_64_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(125,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(126,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(127,this);return false;"><span
                                                                            class="cke_button_icon cke_button__justifycenter_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -1128px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_64_label"
                                                                            class="cke_button_label cke_button__justifycenter_label"
                                                                            aria-hidden="false">Center</span><span
                                                                            id="cke_64_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a
                                                                        id="cke_65"
                                                                        class="cke_button cke_button__justifyright cke_button_off"
                                                                        href="javascript:void('Align Right')"
                                                                        title="Align Right" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_65_label"
                                                                        aria-describedby="cke_65_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(128,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(129,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(130,this);return false;"><span
                                                                            class="cke_button_icon cke_button__justifyright_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -1176px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_65_label"
                                                                            class="cke_button_label cke_button__justifyright_label"
                                                                            aria-hidden="false">Align Right</span><span
                                                                            id="cke_65_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a
                                                                        id="cke_66"
                                                                        class="cke_button cke_button__justifyblock cke_button_off"
                                                                        href="javascript:void('Justify')"
                                                                        title="Justify" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_66_label"
                                                                        aria-describedby="cke_66_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(131,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(132,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(133,this);return false;"><span
                                                                            class="cke_button_icon cke_button__justifyblock_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -1104px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_66_label"
                                                                            class="cke_button_label cke_button__justifyblock_label"
                                                                            aria-hidden="false">Justify</span><span
                                                                            id="cke_66_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><span
                                                                        class="cke_toolbar_separator"
                                                                        role="separator"></span><a id="cke_67"
                                                                        class="cke_button cke_button__bidiltr cke_button_off"
                                                                        href="javascript:void('Text direction from left to right')"
                                                                        title="Text direction from left to right"
                                                                        tabindex="-1" hidefocus="true" role="button"
                                                                        aria-labelledby="cke_67_label"
                                                                        aria-describedby="cke_67_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(134,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(135,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(136,this);return false;"><span
                                                                            class="cke_button_icon cke_button__bidiltr_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -168px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_67_label"
                                                                            class="cke_button_label cke_button__bidiltr_label"
                                                                            aria-hidden="false">Text direction from left
                                                                            to right</span><span id="cke_67_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a
                                                                        id="cke_68"
                                                                        class="cke_button cke_button__bidirtl cke_button_off"
                                                                        href="javascript:void('Text direction from right to left')"
                                                                        title="Text direction from right to left"
                                                                        tabindex="-1" hidefocus="true" role="button"
                                                                        aria-labelledby="cke_68_label"
                                                                        aria-describedby="cke_68_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(137,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(138,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(139,this);return false;"><span
                                                                            class="cke_button_icon cke_button__bidirtl_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -192px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_68_label"
                                                                            class="cke_button_label cke_button__bidirtl_label"
                                                                            aria-hidden="false">Text direction from right
                                                                            to left</span><span id="cke_68_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a
                                                                        id="cke_69"
                                                                        class="cke_button cke_button__language cke_button_off"
                                                                        href="javascript:void('Set language')"
                                                                        title="Set language" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_69_label"
                                                                        aria-describedby="cke_69_description"
                                                                        aria-haspopup="true"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(140,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(141,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(142,this);return false;"><span
                                                                            class="cke_button_icon cke_button__language_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -1200px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_69_label"
                                                                            class="cke_button_label cke_button__language_label"
                                                                            aria-hidden="false">Set language</span><span
                                                                            id="cke_69_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span><span
                                                                            class="cke_button_arrow"></span></a></span><span
                                                                    class="cke_toolbar_end"></span></span><span
                                                                id="cke_70" class="cke_toolbar"
                                                                aria-labelledby="cke_70_label" role="toolbar"><span
                                                                    id="cke_70_label"
                                                                    class="cke_voice_label">Links</span><span
                                                                    class="cke_toolbar_start"></span><span
                                                                    class="cke_toolgroup" role="presentation"><a
                                                                        id="cke_71"
                                                                        class="cke_button cke_button__link cke_button_off"
                                                                        href="javascript:void('Link')"
                                                                        title="Link (Ctrl+L)" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_71_label"
                                                                        aria-describedby="cke_71_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(143,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(144,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(145,this);return false;"><span
                                                                            class="cke_button_icon cke_button__link_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -1272px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_71_label"
                                                                            class="cke_button_label cke_button__link_label"
                                                                            aria-hidden="false">Link</span><span
                                                                            id="cke_71_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false">Keyboard shortcut
                                                                            Ctrl+L</span></a><a id="cke_72"
                                                                        class="cke_button cke_button__unlink cke_button_disabled "
                                                                        href="javascript:void('Unlink')" title="Unlink"
                                                                        tabindex="-1" hidefocus="true" role="button"
                                                                        aria-labelledby="cke_72_label"
                                                                        aria-describedby="cke_72_description"
                                                                        aria-haspopup="false" aria-disabled="true"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(146,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(147,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(148,this);return false;"><span
                                                                            class="cke_button_icon cke_button__unlink_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -1296px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_72_label"
                                                                            class="cke_button_label cke_button__unlink_label"
                                                                            aria-hidden="false">Unlink</span><span
                                                                            id="cke_72_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a
                                                                        id="cke_73"
                                                                        class="cke_button cke_button__anchor cke_button_off"
                                                                        href="javascript:void('Anchor')" title="Anchor"
                                                                        tabindex="-1" hidefocus="true" role="button"
                                                                        aria-labelledby="cke_73_label"
                                                                        aria-describedby="cke_73_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(149,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(150,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(151,this);return false;"><span
                                                                            class="cke_button_icon cke_button__anchor_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -1248px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_73_label"
                                                                            class="cke_button_label cke_button__anchor_label"
                                                                            aria-hidden="false">Anchor</span><span
                                                                            id="cke_73_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a></span><span
                                                                    class="cke_toolbar_end"></span></span><span
                                                                id="cke_74" class="cke_toolbar cke_toolbar_last"
                                                                aria-labelledby="cke_74_label" role="toolbar"><span
                                                                    id="cke_74_label"
                                                                    class="cke_voice_label">Insert</span><span
                                                                    class="cke_toolbar_start"></span><span
                                                                    class="cke_toolgroup" role="presentation"><a
                                                                        id="cke_75"
                                                                        class="cke_button cke_button__image cke_button_off"
                                                                        href="javascript:void('Image')" title="Image"
                                                                        tabindex="-1" hidefocus="true" role="button"
                                                                        aria-labelledby="cke_75_label"
                                                                        aria-describedby="cke_75_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(152,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(153,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(154,this);return false;"><span
                                                                            class="cke_button_icon cke_button__image_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -960px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_75_label"
                                                                            class="cke_button_label cke_button__image_label"
                                                                            aria-hidden="false">Image</span><span
                                                                            id="cke_75_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a
                                                                        id="cke_76"
                                                                        class="cke_button cke_button__flash cke_button_off"
                                                                        href="javascript:void('Flash')" title="Flash"
                                                                        tabindex="-1" hidefocus="true" role="button"
                                                                        aria-labelledby="cke_76_label"
                                                                        aria-describedby="cke_76_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(155,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(156,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(157,this);return false;"><span
                                                                            class="cke_button_icon cke_button__flash_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -600px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_76_label"
                                                                            class="cke_button_label cke_button__flash_label"
                                                                            aria-hidden="false">Flash</span><span
                                                                            id="cke_76_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a
                                                                        id="cke_77"
                                                                        class="cke_button cke_button__table cke_button_off"
                                                                        href="javascript:void('Table')" title="Table"
                                                                        tabindex="-1" hidefocus="true" role="button"
                                                                        aria-labelledby="cke_77_label"
                                                                        aria-describedby="cke_77_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(158,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(159,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(160,this);return false;"><span
                                                                            class="cke_button_icon cke_button__table_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -1920px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_77_label"
                                                                            class="cke_button_label cke_button__table_label"
                                                                            aria-hidden="false">Table</span><span
                                                                            id="cke_77_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a
                                                                        id="cke_78"
                                                                        class="cke_button cke_button__horizontalrule cke_button_off"
                                                                        href="javascript:void('Insert Horizontal Line')"
                                                                        title="Insert Horizontal Line" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_78_label"
                                                                        aria-describedby="cke_78_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(161,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(162,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(163,this);return false;"><span
                                                                            class="cke_button_icon cke_button__horizontalrule_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -912px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_78_label"
                                                                            class="cke_button_label cke_button__horizontalrule_label"
                                                                            aria-hidden="false">Insert Horizontal
                                                                            Line</span><span id="cke_78_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a
                                                                        id="cke_79"
                                                                        class="cke_button cke_button__smiley cke_button_off"
                                                                        href="javascript:void('Smiley')" title="Smiley"
                                                                        tabindex="-1" hidefocus="true" role="button"
                                                                        aria-labelledby="cke_79_label"
                                                                        aria-describedby="cke_79_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(164,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(165,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(166,this);return false;"><span
                                                                            class="cke_button_icon cke_button__smiley_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -1080px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_79_label"
                                                                            class="cke_button_label cke_button__smiley_label"
                                                                            aria-hidden="false">Smiley</span><span
                                                                            id="cke_79_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a
                                                                        id="cke_80"
                                                                        class="cke_button cke_button__specialchar cke_button_off"
                                                                        href="javascript:void('Insert Special Character')"
                                                                        title="Insert Special Character" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_80_label"
                                                                        aria-describedby="cke_80_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(167,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(168,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(169,this);return false;"><span
                                                                            class="cke_button_icon cke_button__specialchar_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -1872px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_80_label"
                                                                            class="cke_button_label cke_button__specialchar_label"
                                                                            aria-hidden="false">Insert Special
                                                                            Character</span><span id="cke_80_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a
                                                                        id="cke_81"
                                                                        class="cke_button cke_button__pagebreak cke_button_off"
                                                                        href="javascript:void('Insert Page Break for Printing')"
                                                                        title="Insert Page Break for Printing"
                                                                        tabindex="-1" hidefocus="true" role="button"
                                                                        aria-labelledby="cke_81_label"
                                                                        aria-describedby="cke_81_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(170,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(171,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(172,this);return false;"><span
                                                                            class="cke_button_icon cke_button__pagebreak_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -1512px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_81_label"
                                                                            class="cke_button_label cke_button__pagebreak_label"
                                                                            aria-hidden="false">Insert Page Break for
                                                                            Printing</span><span id="cke_81_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a
                                                                        id="cke_82"
                                                                        class="cke_button cke_button__iframe cke_button_off"
                                                                        href="javascript:void('IFrame')" title="IFrame"
                                                                        tabindex="-1" hidefocus="true" role="button"
                                                                        aria-labelledby="cke_82_label"
                                                                        aria-describedby="cke_82_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(173,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(174,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(175,this);return false;"><span
                                                                            class="cke_button_icon cke_button__iframe_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -936px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_82_label"
                                                                            class="cke_button_label cke_button__iframe_label"
                                                                            aria-hidden="false">IFrame</span><span
                                                                            id="cke_82_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a></span><span
                                                                    class="cke_toolbar_end"></span></span><span
                                                                class="cke_toolbar_break"></span><span id="cke_83"
                                                                class="cke_toolbar" aria-labelledby="cke_83_label"
                                                                role="toolbar"><span id="cke_83_label"
                                                                    class="cke_voice_label">Styles</span><span
                                                                    class="cke_toolbar_start"></span><span
                                                                    id="cke_13"
                                                                    class="cke_combo cke_combo__styles cke_combo_off"
                                                                    role="presentation"><span id="cke_13_label"
                                                                        class="cke_combo_label">Styles</span><a
                                                                        class="cke_combo_button"
                                                                        title="Formatting Styles" tabindex="-1"
                                                                        href="javascript:void('Formatting Styles')"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_13_label"
                                                                        aria-haspopup="true"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(177,event,this);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(178,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(176,this);return false;"><span
                                                                            id="cke_13_text"
                                                                            class="cke_combo_text cke_combo_inlinelabel">Styles</span><span
                                                                            class="cke_combo_open"><span
                                                                                class="cke_combo_arrow"></span></span></a></span><span
                                                                    id="cke_14"
                                                                    class="cke_combo cke_combo__format cke_combo_off"
                                                                    role="presentation"><span id="cke_14_label"
                                                                        class="cke_combo_label">Format</span><a
                                                                        class="cke_combo_button"
                                                                        title="Paragraph Format" tabindex="-1"
                                                                        href="javascript:void('Paragraph Format')"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_14_label"
                                                                        aria-haspopup="true"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(180,event,this);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(181,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(179,this);return false;"><span
                                                                            id="cke_14_text"
                                                                            class="cke_combo_text cke_combo_inlinelabel">Format</span><span
                                                                            class="cke_combo_open"><span
                                                                                class="cke_combo_arrow"></span></span></a></span><span
                                                                    id="cke_15"
                                                                    class="cke_combo cke_combo__font cke_combo_off"
                                                                    role="presentation"><span id="cke_15_label"
                                                                        class="cke_combo_label">Font</span><a
                                                                        class="cke_combo_button" title="Font Name"
                                                                        tabindex="-1"
                                                                        href="javascript:void('Font Name')"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_15_label"
                                                                        aria-haspopup="true"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(183,event,this);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(184,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(182,this);return false;"><span
                                                                            id="cke_15_text"
                                                                            class="cke_combo_text cke_combo_inlinelabel">Font</span><span
                                                                            class="cke_combo_open"><span
                                                                                class="cke_combo_arrow"></span></span></a></span><span
                                                                    id="cke_16"
                                                                    class="cke_combo cke_combo__fontsize cke_combo_off"
                                                                    role="presentation"><span id="cke_16_label"
                                                                        class="cke_combo_label">Size</span><a
                                                                        class="cke_combo_button" title="Font Size"
                                                                        tabindex="-1"
                                                                        href="javascript:void('Font Size')"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_16_label"
                                                                        aria-haspopup="true"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(186,event,this);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(187,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(185,this);return false;"><span
                                                                            id="cke_16_text"
                                                                            class="cke_combo_text cke_combo_inlinelabel">Size</span><span
                                                                            class="cke_combo_open"><span
                                                                                class="cke_combo_arrow"></span></span></a></span><span
                                                                    class="cke_toolbar_end"></span></span><span
                                                                id="cke_84" class="cke_toolbar"
                                                                aria-labelledby="cke_84_label" role="toolbar"><span
                                                                    id="cke_84_label"
                                                                    class="cke_voice_label">Colors</span><span
                                                                    class="cke_toolbar_start"></span><span
                                                                    class="cke_toolgroup" role="presentation"><a
                                                                        id="cke_85"
                                                                        class="cke_button cke_button__textcolor cke_button_off"
                                                                        href="javascript:void('Text Color')"
                                                                        title="Text Color" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_85_label"
                                                                        aria-describedby="cke_85_description"
                                                                        aria-haspopup="true"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(188,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(189,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(190,this);return false;"><span
                                                                            class="cke_button_icon cke_button__textcolor_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -408px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_85_label"
                                                                            class="cke_button_label cke_button__textcolor_label"
                                                                            aria-hidden="false">Text Color</span><span
                                                                            id="cke_85_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span><span
                                                                            class="cke_button_arrow"></span></a><a
                                                                        id="cke_86"
                                                                        class="cke_button cke_button__bgcolor cke_button_off"
                                                                        href="javascript:void('Background Color')"
                                                                        title="Background Color" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_86_label"
                                                                        aria-describedby="cke_86_description"
                                                                        aria-haspopup="true"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(191,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(192,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(193,this);return false;"><span
                                                                            class="cke_button_icon cke_button__bgcolor_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -384px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_86_label"
                                                                            class="cke_button_label cke_button__bgcolor_label"
                                                                            aria-hidden="false">Background
                                                                            Color</span><span id="cke_86_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span><span
                                                                            class="cke_button_arrow"></span></a></span><span
                                                                    class="cke_toolbar_end"></span></span><span
                                                                id="cke_87" class="cke_toolbar"
                                                                aria-labelledby="cke_87_label" role="toolbar"><span
                                                                    id="cke_87_label"
                                                                    class="cke_voice_label">Tools</span><span
                                                                    class="cke_toolbar_start"></span><span
                                                                    class="cke_toolgroup" role="presentation"><a
                                                                        id="cke_88"
                                                                        class="cke_button cke_button__maximize cke_button_off"
                                                                        href="javascript:void('Maximize')"
                                                                        title="Maximize" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_88_label"
                                                                        aria-describedby="cke_88_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(194,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(195,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(196,this);return false;"><span
                                                                            class="cke_button_icon cke_button__maximize_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -1416px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_88_label"
                                                                            class="cke_button_label cke_button__maximize_label"
                                                                            aria-hidden="false">Maximize</span><span
                                                                            id="cke_88_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a><a
                                                                        id="cke_89"
                                                                        class="cke_button cke_button__showblocks cke_button_off"
                                                                        href="javascript:void('Show Blocks')"
                                                                        title="Show Blocks" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_89_label"
                                                                        aria-describedby="cke_89_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(197,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(198,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(199,this);return false;"><span
                                                                            class="cke_button_icon cke_button__showblocks_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 -1800px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_89_label"
                                                                            class="cke_button_label cke_button__showblocks_label"
                                                                            aria-hidden="false">Show Blocks</span><span
                                                                            id="cke_89_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a></span><span
                                                                    class="cke_toolbar_end"></span></span><span
                                                                id="cke_90" class="cke_toolbar cke_toolbar_last"
                                                                aria-labelledby="cke_90_label" role="toolbar"><span
                                                                    id="cke_90_label"
                                                                    class="cke_voice_label">about</span><span
                                                                    class="cke_toolbar_start"></span><span
                                                                    class="cke_toolgroup" role="presentation"><a
                                                                        id="cke_91"
                                                                        class="cke_button cke_button__about cke_button_off"
                                                                        href="javascript:void('About CKEditor 4')"
                                                                        title="About CKEditor 4" tabindex="-1"
                                                                        hidefocus="true" role="button"
                                                                        aria-labelledby="cke_91_label"
                                                                        aria-describedby="cke_91_description"
                                                                        aria-haspopup="false"
                                                                        onkeydown="return CKEDITOR.tools.callFunction(200,event);"
                                                                        onfocus="return CKEDITOR.tools.callFunction(201,event);"
                                                                        onclick="CKEDITOR.tools.callFunction(202,this);return false;"><span
                                                                            class="cke_button_icon cke_button__about_icon"
                                                                            style="background-image:url('https://meritstudyresources.co.uk/backend/assets/vendor_components/ckeditor/plugins/icons.png?t=I2QI');background-position:0 0px;background-size:auto;">&nbsp;</span><span
                                                                            id="cke_91_label"
                                                                            class="cke_button_label cke_button__about_label"
                                                                            aria-hidden="false">About CKEditor
                                                                            4</span><span id="cke_91_description"
                                                                            class="cke_button_label"
                                                                            aria-hidden="false"></span></a></span><span
                                                                    class="cke_toolbar_end"></span></span></span></span>
                                                    <div id="cke_1_contents" class="cke_contents cke_reset"
                                                        role="presentation" style="height: 200px;"><span
                                                            id="cke_96" class="cke_voice_label">Press ALT 0 for
                                                            help</span><iframe src="" frameborder="0"
                                                            class="cke_wysiwyg_frame cke_reset"
                                                            title="Rich Text Editor, editor1" aria-describedby="cke_96"
                                                            tabindex="0" allowtransparency="true"
                                                            style="width: 100%; height: 100%;"></iframe></div><span
                                                        id="cke_1_bottom" class="cke_bottom cke_reset_all"
                                                        role="presentation" style="user-select: none;"><span
                                                            id="cke_1_resizer"
                                                            class="cke_resizer cke_resizer_vertical cke_resizer_ltr"
                                                            title="Resize"
                                                            onmousedown="CKEDITOR.tools.callFunction(0, event)">◢</span><span
                                                            id="cke_1_path_label" class="cke_voice_label">Elements
                                                            path</span><span id="cke_1_path" class="cke_path"
                                                            role="group" aria-labelledby="cke_1_path_label"><span
                                                                class="cke_path_empty">&nbsp;</span></span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <a href="https://meritstudyresources.co.uk/admin/blogs"
                                    class="btn btn-danger">Cancel</a>
                                <button type="submit" class="btn btn-success pull-right">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
@endsection
