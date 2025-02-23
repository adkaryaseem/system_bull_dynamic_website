@extends("frontend.layouts.main")
    @push("title")
        <title>Silent Features</title>
    @endpush
@push("css")
    <link rel="stylesheet" href="{{asset("frontend/css/silent-feature-style.css")}}">
    @endpush
    @section("main-content") 
    <main>
        <div class="container-1">
            <div class="cntnr-title">
                Silent Features
            </div>
        </div>
        <div class="container-2">
            <div class="building-image">
                <img src="{{asset("frontend/image/building.jpg")}}" />
            </div>
            <div class="title-list">
                    <div class="title">
                        Silent Features
                    </div>
                            <ul>
                                <li>
                                    Leading ICT education college of its own kind with unique curriculum.              
                                </li>
                                <li>
                                    Dual certification program (One is from System Bull and the other is from CTEVT).
                                </li>
                                <li>
                                    Ultimate destination of Technical Graduates.
                                </li>
                                <li>
                                    Experienced, educated, qualified and dedicated faculty members.
                                </li>
                                <li>
                                    Typical methodologies of teaching.
                                </li>
                                <li>
                                    Well equipped with modern equipment and devices.
                                </li>
                                <li>
                                    Spacious and ventilated ICT laboratory.
                                </li>
                                <li>
                                    Teaching through audio-visual paradigm.
                                </li>
                            </ul>
            </div>
        </div>
    </main>
    @endsection