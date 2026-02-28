@extends('layouts.frontend')
@section('title', 'Student Application Form')
@section('meta_description', 'Apply for your desired UK course')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<style>
    body {
        background: linear-gradient(135deg, #eef2f7, #f9fbff);
    }

    .card-box {
        max-width: 1100px;
        margin: 60px auto;
        background: #ffffff;
        padding: 50px;
        border-radius: 22px;
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.08);
    }

    .step-wrapper {
        display: flex;
        justify-content: space-between;
        margin-bottom: 25px;
    }

    .step-circle {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        background: #e2e8f0;
        text-align: center;
        line-height: 42px;
        font-weight: 600;
        transition: .3s ease;
    }

    .step-circle.active {
        background: linear-gradient(135deg, #4f46e5, #9333ea);
        color: #fff;
        transform: scale(1.1);
        box-shadow: 0 5px 15px rgba(79, 70, 229, 0.4);
    }

    .progress {
        height: 8px;
        border-radius: 10px;
        background: #e2e8f0;
        overflow: hidden;
        margin-bottom: 35px;
    }

    .progress-bar {
        background: linear-gradient(90deg, #4f46e5, #9333ea);
        transition: width .4s ease;
    }

    .step-header {
        text-align: center;
        margin-bottom: 35px;
    }

    .step-header i {
        font-size: 32px;
        background: linear-gradient(135deg, #4f46e5, #9333ea);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .step-header h5 {
        margin-top: 10px;
        font-weight: 600;
    }

    .form-floating>.form-control,
    .form-floating>.form-select {
        height: 55px;
        border-radius: 12px;
        border: 1px solid #d1d5db;
    }

    .form-floating>.form-control:focus,
    .form-floating>.form-select:focus {
        border-color: #4f46e5;
        box-shadow: 0 0 0 0.15rem rgba(79, 70, 229, 0.2);
    }

    textarea.form-control {
        height: 120px !important;
    }

    .btn-modern {
        background: linear-gradient(135deg, #4f46e5, #9333ea);
        border: none;
        color: #fff;
        padding: 10px 30px;
        border-radius: 12px;
        font-weight: 500;
        transition: .3s ease;
    }

    .btn-modern:hover {
        transform: translateY(-2px);
        opacity: .9;
    }

    .btn-secondary {
        border-radius: 12px;
        padding: 10px 25px;
    }

    .error-border {
        border: 1px solid #dc3545 !important;
    }

    .tab-step {
        display: none;
        animation: fade .4s ease;
    }

    .tab-step.active {
        display: block;
    }
a{
    text-decoration: none;
}
    @keyframes fade {
        from { opacity: 0; transform: translateX(15px); }
        to { opacity: 1; transform: translateX(0); }
    }
</style>

    <div class="page-title-area item-bg-2">
        <div class="container">
            <div class="page-title-content">
                <h2>Student Application Form</h2>
            </div>
        </div>
    </div>
<div class="container">
    <div class="card-box">

        <h4 class="text-center mb-4">Apply for Your Next Degree</h4>

        <div class="step-wrapper">
            <div class="step-circle active">1</div>
            <div class="step-circle">2</div>
            <div class="step-circle">3</div>
            <div class="step-circle">4</div>
        </div>

        <div class="progress">
            <div class="progress-bar" style="width:25%"></div>
        </div>

        <form id="applyForm"
      action="{{ route('frontend.course.apply.submit', $course->id) }}"
      method="POST"
      enctype="multipart/form-data">
            @csrf

            <!-- STEP 1 -->
            <div class="tab-step active">
                <div class="step-header">
                    <i class="bi bi-person-circle"></i>
                    <h5>Personal Information</h5>
                </div>

                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" name="first_name" class="form-control required" placeholder="First Name">
                            <label>First Name</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" name="last_name" class="form-control required" placeholder="Last Name">
                            <label>Last Name</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control required" placeholder="Email">
                            <label>Email Address</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" name="phone" class="form-control required" placeholder="Phone">
                            <label>Phone Number</label>
                        </div>
                    </div>
                </div>

                <div class="text-end mt-4">
                    <button type="button" class="btn-modern next">Next</button>
                </div>
            </div>

            <!-- STEP 2 -->
            <div class="tab-step">
                <div class="step-header">
                    <i class="bi bi-mortarboard-fill"></i>
                    <h5>Education Background</h5>
                </div>

                <div class="form-floating mb-4">
                    <input type="text" name="qualification" class="form-control required" placeholder="Qualification">
                    <label>Highest Qualification</label>
                </div>

                 <div class="form-floating mb-4">
                    <input type="text" name="english_test" class="form-control required" placeholder="Example: IELTS/MOI/TOEFL">
                    <label>English Test-Example: IELTS/MOI/ToEFL</label>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <button type="button" class="btn btn-secondary prev">Back</button>
                    <button type="button" class="btn-modern next">Next</button>
                </div>
            </div>

            <!-- STEP 3 -->
            <div class="tab-step">
                <div class="step-header">
                    <i class="bi bi-building"></i>
                    <h5>Study Preferences</h5>
                </div>
                <div class="form-floating mb-4">
                    <input type="text" name="preferred_country" class="form-control required" placeholder="Preferred Country">
                    <label>Preferred Country</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="text" name="study_level" class="form-control required" placeholder="Study Level">
                    <label>Preferred Study Level</label>
                </div>
                 <div class="form-floating mb-4">
                    <input type="text" name="preferred_university" class="form-control required" placeholder="Preferred University">
                    <label>Preferred University</label>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <button type="button" class="btn btn-secondary prev">Back</button>
                    <button type="button" class="btn-modern next">Next</button>
                </div>
            </div>

            <!-- STEP 4 -->
            <div class="tab-step">
                <div class="step-header">
                    <i class="bi bi-file-earmark-arrow-up"></i>
                    <h5>Documents & Statement</h5>
                </div>

                <div class="form-floating mb-4">
                    <textarea name="personal_statement" class="form-control required" placeholder="Statement"></textarea>
                    <label>Personal Statement</label>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <button type="button" class="btn btn-secondary prev">Back</button>
                    <button type="submit" class="btn-modern">Submit Application</button>
                </div>
            </div>

        </form>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {

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
                current++;
                showStep(current);
            }
        });
    });

    document.querySelectorAll(".prev").forEach(btn => {
        btn.addEventListener("click", () => {
            current--;
            showStep(current);
        });
    });

document.getElementById("applyForm").addEventListener("submit", function (e) {
    e.preventDefault();

    if (!validateStep()) return;

    let form = this;
    let formData = new FormData(form);

    fetch("{{ route('frontend.course.apply.submit', $course->id) }}", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {

        if (data.status) {

            Swal.fire({
                icon: 'success',
                title: 'Application Submitted!',
                text: data.message,
                confirmButtonColor: '#4f46e5'
            });

            form.reset();
            current = 0;
            showStep(current);

        } else {

            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: data.message
            });

        }

    })
    .catch(error => {

        Swal.fire({
            icon: 'error',
            title: 'Server Error',
            text: 'Something went wrong. Please try again.'
        });

        console.error(error);
    });
});

});
</script>

@endsection
