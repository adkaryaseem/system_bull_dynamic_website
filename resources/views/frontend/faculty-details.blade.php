@extends("frontend.layouts.main")

@push("title")
    <title>Diploma in Information and Communication Technology</title>
@endpush

@push("css")
    <link rel="stylesheet" href="{{asset("frontend/css/faculty-details-style.css")}}">
@endpush

    @section("main-content") 
         <main>
        <!-- main start -->
        <div class="container-1">
            <div class="cntnr-title">
                Diploma in Information and Communication Technology
            </div>
        </div>
        <section>
            <div class="title">
                Diploma in Information and Communication Technology
            </div>
            <div class="image">
                <img src="{{asset("frontend/image/3-960x460.jpg")}}" />
            </div><br/>
            <div class="duration">
                <div class="topic">
                    Duration
                </div>
                    <div class="list">
                        <ul>
                            <li>
                                1 Year Study 2 Years OJT
                            </li>
                            <li>
                                1 Year Study (Professional Computer Hardware & Network Technician)
                            </li>
                            <li>
                                2 Years OJT (Job)
                            </li>
                               <b>ELIGILIBILITY:  SEE Above</b> 
                        </ul>
                    </div>
            </div>
                <div class="semester-1">
                    <div class="topic">
                        Semester I
                    </div>
                    <div class="list">
                        <ul>
                            <li>
                                Introduction to Computer Architecture and Operating System
                            </li>
                            <li>
                                Basic Electronics
                            </li>
                            <li>
                                Digital Logic Circuit
                            </li>
                            <li>
                                Microprocessor
                            </li>
                            <li>
                                PC Hardware
                            </li>
                            <li>
                                Networking Fundamentals with Windows
                            </li>
                            <li>
                                Client-Server
                            </li>
                            <li>
                                Applied Math
                            </li>
                            <li>
                                English & Nepali Communication, Life & Soft Skills
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="semester-2">
                    <div class="topic">
                        Semester II
                    </div>
                    <div class="list">
                        <ul>
                            <li>
                                Routing and Switching (Cisco)                            
                            </li>
                            <li>
                                Linux                            
                            </li>
                            <li>
                                Gender Equality and Social Assimilation
                            </li>
                            <li>
                                Firewall
                            </li>
                            <li>
                                Entrepreneurship Development
                            </li>
                            <li>
                                Project work at ICT Research Lab
                            </li>
                            <li>
                                OJT
                            </li>                 
                        </ul>
                    </div>
                </div>
                <div class="project-work">
                    <div class="topic">
                        Project and field work:
                    </div>
                    <div class="list">
                        <ul>
                            There are two options to attend the CTEVT -NSTB Level examination.<br/><br/>
                            <li>
                                After passing examination of two semesters , student can appear CTEVT -NSTB level 2 examination. After passing the level 2 examination & one year OJT (Job) student can appear level 3 examination.
                            </li>
                            <li>
                                After passing examination of two semesters, (SYSTEM BULL) students are eligible for OJT (Job). Similarly after completion of two years OJT (Job), students can appear in CTEVT -NSTB final examination (L3).
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="study-materials">
                    <div class="topic">
                        Study Materials:
                    </div>
                    <div class="list">
                        <ul>
                            softcopy hands out as well as e-library access will be provided     
                        </ul>
                    </div>
                </div>
        </section>
        <!-- main end -->
            </main>
    @endsection