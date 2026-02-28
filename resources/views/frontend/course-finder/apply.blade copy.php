@extends('layouts.frontend')
@section('title', 'Course Finder')
@section('meta_description', 'Learn')
@section('content')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            background: #f4f6fb;
        }

        .card-box {
            max-width: 90%;
            margin: 50px auto;
            background: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
        }

        .tab-step {
            display: none;
            animation: fade .4s ease;
        }

        .tab-step.active {
            display: block;
        }

        @keyframes fade {
            from {
                opacity: 0;
                transform: translateX(20px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .progress {
            height: 6px;
        }

        .progress-bar {
            transition: .4s;
        }

        .step-circle {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: #e9ecef;
            text-align: center;
            line-height: 35px;
            font-weight: 600;
        }

        .step-circle.active {
            background: #6f42c1;
            color: #fff;
        }

        .btn-gradient {
            background: linear-gradient(45deg, #1e3c72, #e05260);
            border: none;
            color: #fff;
            border-radius: 8px;
            padding: 8px 20px;
        }

        .error-border {
            border: 1px solid red !important;
        }
    </style>

    <div class="page-title-area item-bg-2">
        <div class="container">
            <div class="page-title-content">
                <h2>Student Application Form</h2>
            </div>
        </div>
    </div>

    <section class="ptb-100">
        <div class="container">
            <div class="card-box">

                <h4 class="text-center mb-4">Ready for your next degree?</h4>

                <div class="d-flex justify-content-between mb-2">
                    <div class="step-circle active">1</div>
                    <div class="step-circle">2</div>
                    <div class="step-circle">3</div>
                    <div class="step-circle">4</div>
                </div>

                <div class="progress mb-4">
                    <div class="progress-bar bg-primary" style="width:25%"></div>
                </div>

                <form id="applyForm" action="{{ route('frontend.course.apply.submit', $course->id) }}" enctype="multipart/form-data">
                    @csrf

                    <!-- STEP 1 -->
                    <div class="tab-step active">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input name="first_name" class="form-control required" placeholder="First Name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input name="last_name" class="form-control required" placeholder="Last Name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input name="phone" class="form-control required" placeholder="Phone Number">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input name="email" type="email" class="form-control required" placeholder="Email">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input name="dob" type="date" class="form-control required">
                            </div>
                            <div class="col-md-6 mb-3">
                                <select name="gender" class="form-select form-control">

                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input name="nationality" class="form-control required" placeholder="Nationality">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input name="country_residence" class="form-control required"
                                    placeholder="Country of Residence">
                            </div>
                            <div class="col-md-12 mb-3">
                                <input name="address" class="form-control required" placeholder="Current Address">
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="button" class="default-btn next">Next</button>
                        </div>
                    </div>

                    <!-- STEP 2 -->
                    <div class="tab-step">
                        <div class="mb-3">
                            <select name="qualification" class="form-select form-control">
                                <option value="">Highest Qualification Achieved</option>
                                <option value="High School">High School</option>
                                <option value="Bachelor">Bachelor</option>
                                <option value="Master">Master</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <input name="institution" class="form-control required" placeholder="Name of Institution">
                        </div>
                        <div class="mb-3">
                            <input name="course_name" class="form-control required" placeholder="Course Name">
                        </div>
                        <div class="mb-3">
                            <input name="graduation_year" type="number" class="form-control required"
                                placeholder="Graduation Year">
                        </div>
                        <div class="mb-3">
                            <select name="english_test" class="form-select form-control">
                                <option value="">Have you taken English test?</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <br>
                        <div class="">
                            <button type="button" class="btn btn-secondary prev">Back</button>
                            <button type="button" class="default-btn next">Next</button>
                        </div>
                    </div>

                    <!-- STEP 3 -->
                    <div class="tab-step">
                        <input name="study_level" class="form-control required mb-3" placeholder="Preferred Study Level">
                        <input name="subjects" class="form-control required mb-3" placeholder="Preferred Subjects">
                        <input name="intake_month" class="form-control required mb-3"
                            placeholder="Preferred Intake Month">
                        <input name="intake_year" class="form-control required mb-3" placeholder="Preferred Intake Year">
                        <input name="universities" class="form-control mb-3" placeholder="Preferred Universities">
                        <input name="cities" class="form-control mb-3" placeholder="Preferred Cities in UK">

                        <div class="d-flex">
                            <button type="button" class="btn btn-secondary prev">Back</button>
                            <button type="button" class="default-btn next">Next</button>
                        </div>
                    </div>

                    <!-- STEP 4 -->
                    <div class="tab-step">
                        <input type="file" name="academic_certificates" class="form-control required mb-3"
                            accept=".pdf,.jpg,.png">
                        <input type="file" name="mark_sheets" class="form-control required mb-3"
                            accept=".pdf,.jpg,.png">
                        <input type="file" name="english_certificate" class="form-control mb-3"
                            accept=".pdf,.jpg,.png">
                        <input type="file" name="cv" class="form-control mb-3" accept=".pdf,.doc,.docx">
                        <textarea name="personal_statement" class="form-control required mb-3" placeholder="Personal Statement"></textarea>

                        <div class="d-flex">
                            <button type="button" class="btn btn-secondary prev">Back</button>
                            <button type="submit" class="default-btn">Submit Application</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>
    <script>
        function validateStep() {
            let valid = true;

            steps[current].querySelectorAll(".required").forEach(field => {

                if (field.tagName === "SELECT") {
                    if (field.value === "") {
                        valid = false;
                        field.classList.add("error-border");
                    } else {
                        field.classList.remove("error-border");
                    }
                } else if (field.type === "file") {
                    if (field.files.length === 0) {
                        valid = false;
                        field.classList.add("error-border");
                    } else {
                        field.classList.remove("error-border");
                    }
                } else {
                    if (field.value.trim() === "") {
                        valid = false;
                        field.classList.add("error-border");
                    } else {
                        field.classList.remove("error-border");
                    }
                }

            });

            return valid;
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            let current = 0;
            const steps = document.querySelectorAll(".tab-step");
            const circles = document.querySelectorAll(".step-circle");
            const progressBar = document.querySelector(".progress-bar");

            function showStep(index) {
                steps.forEach((step, i) => step.classList.toggle("active", i === index));
                circles.forEach((c, i) => c.classList.toggle("active", i <= index));
                progressBar.style.width = ((index + 1) / steps.length) * 100 + "%";
            }

            function validateStep() {
                let valid = true;
                steps[current].querySelectorAll(".required").forEach(field => {
                    if (!field.value) {
                        valid = false;
                        field.classList.add("error-border");
                    } else {
                        field.classList.remove("error-border");
                    }
                });
                return valid;
            }

            document.querySelectorAll(".next").forEach(btn => {
                btn.addEventListener("click", () => {
                    if (validateStep()) {
                        if (current < steps.length - 1) {
                            current++;
                            showStep(current);
                        }
                    }
                });
            });

            document.querySelectorAll(".prev").forEach(btn => {
                btn.addEventListener("click", () => {
                    if (current > 0) {
                        current--;
                        showStep(current);
                    }
                });
            });

            document.getElementById("applyForm").addEventListener("submit", function(e) {
                e.preventDefault();
                if (!validateStep()) return;

                let formData = new FormData(this);

                fetch("/submit-application", {
                        method: "POST",
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                        },
                        body: formData
                    })
                    .then(res => res.json())
                    .then(data => {
                        Swal.fire({
                            icon: 'success',
                            title: 'Application Submitted!',
                            text: 'Your UK course application has been successfully sent.',
                            confirmButtonColor: '#6f42c1'
                        });
                        this.reset();
                        current = 0;
                        showStep(current);
                    })
                    .catch(() => {
                        Swal.fire("Error", "Something went wrong.", "error");
                    });
            });

        });
    </script>

@endsection
