<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <link rel="shortcut icon" href="{{asset("frontend/image/logo-white-bg-circle.png")}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset("frontend/css/form-style.css")}}">
</head>
<body>
    <div>
        @if(session()->has("message"))
        <p>
            {{ session()->get("message") }}
        </p>
        @endif
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        @endif
    </div>
    <form action="{{ route('admission.form.submit') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-heading">
            <div class="logo">
                <img src="{{asset("frontend/image/logo.png")}}" />
            </div>
            <div class="text">
                <div class="clz-title">
                    System Bull ICT College
                </div>
                <div class="address font">
                    Mayalbari,Teku-12,Kathmandu | Phone : 01-5922111
                </div>
                <div class="mail font">
                    Email : systembullictcollege@gmail.com
                </div>
                <div class="topic font">
                    Admission Inquiry Form
                </div>
            </div>
                <input type="photo" class="photo" placeholder="PP size photo "/>
        </div>
        <table>
        <div class="form-fillup-section">
            <div class="compulsary">
                Fields with (*) are compulsory.
            </div>
            <div class="title">
                Student's Information
            </div>
            <div class="student-name input-text">
                Name of the Applicant (Full Name)*:
                <div class="namebox">
                    <input type="text" name="name" placeholder="Name of the Applicant (Full Name)" required />
                </div>
            </div>
            <div class="course-stdlvl input-text">
                <label for="applly">Applied For :</label>
                <select name="course_id" class="course-option">
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}">
                            {{ $course->name }}
                        </option>
                    @endforeach
                </select>
                Current Study Level :
                <input type="text" name="studylevel"/>
            </div>
            <div class="gender-national-mail input-text" aria-required="true">
                Gender :
                <input type="radio" name="gender" value="male">
                <label for="male">
                    Male
                </label>
                <input type="radio" name="gender" value="female"> 
                <label for="female">
                    Female
                </label>
                <label for="nationality"> Nationality :</label>
                <select name="country_id" id="country">
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}">
                            {{ $country->name }}
                        </option>
                    @endforeach
                </select>
                Emali :
                <input type="text" name="email">
            </div>
            <div class="dob input-text">
                Date Of Birth :
                A.D
                <input type="date" name="birthdate">                       
                B.S
                <input type="date" name="birthdate">
                Age
                <input type="text" name="age">
            </div>
            <div class="add-phn input-text">
                Address :
                <input type="text" name="address" required>
                Phone No.
                <input type="text" name="number" required>
            </div>
        </div>
        <div class="father-info">
            <div class="title">
                Father's Information
            </div>
            <div class="name-number input-text">
                Father's Name :
                <input type="text" name="father_name" required>
                Mobile No.
                <input type="text" name="father_number" required>
            </div>
            <div class="mail-occup input-text">
                Mail
                <input type="text" name="father_mail">
                Occupation
                <input type="text" name="father_occupation">
            </div>
        </div>
        <div class="mother-info">
            <div class="title">
                Mother's Information
            </div>
            <div class="name-number input-text">
                Mother's Name :
                <input type="text" name="mother_name" required>
                Mobile No.
                <input type="text" name="mother_number" required>
            </div>
            <div class="mail-occup input-text">
                Mail
                <input type="text" name="mother_mail">
                Occupation
                <input type="text" name="mother_occupation">
            </div>
        </div>
        <div class="local-guard-info">
            <div class="title">
                Loacl Guardian's Information
            </div>
            <div class="name-number input-text">
                Local Gurdain's Name :
                <input type="text" name="local_name" required>
                Mobile No.
                <input type="text" name="local_number" required>
            </div>
            <div class="mail-occup input-text">
                Mail
                <input type="text" name="local_mail">
                Occupation
                <input type="text" name="local_occupation">
            </div>
        </div>
        <div class="prev-school-info input-text">
            <div class="title">
                Previous School Information
            </div>
            <div class="school-name input-text">
                School Name
                <input type="text" name="school_name" required>
                School Address
                <input type="text" name="school_address" required>
            </div>
            <div class="gpa input-text">
                GPA
                <input type="text" name="students_gpa" required>
            </div>
        </div>
        {{-- <div class="query">
            <input type="text" name="query" placeholder="Write your query here">
        </div> --}}
        <div class="apply-btn">
            <button type="submit">
                Apply Now
            </button>
        </div>
    </form>
</body>
</html>