@extends("frontend.layouts.main")
@push("ttitle")
    <title>Vision and Mission</title>
    @endpush
    @push("css")
    <link rel="stylesheet" href="{{asset("frontend/css/vision-mission-style.css")}}" />
    @endpush
    @section("main-content")
    <main>
      <div class="container-1">
        <div class="cntnr-title">Vision and Mission</div>
      </div>
      <div class="container-2">
          <div class="vision-image">
              <img src="{{asset("frontend/image/intro.jpg")}}" />
            </div>
            <div class="text-container">
                <div class="mission-title">
                    Vision & Mission
                </div>
                <div class="mission-text">
                    To develop middle and top-level Technical professionals with high
                    caliber ready to accept ever-growing challenges to meet international
                    standards. <br/>
                    <br/>
                    The mission of Sysem Bull ICT College is to develop socially
                    responsive, creative and result-oriented Technical professionals capable
                    of fulfilling middle level and top-level Technical positions in the
                    rapidly growing business and other sectors in Nepal and abroad.
                </div>
            </div>
        </div>
    </main>
    @endsection
