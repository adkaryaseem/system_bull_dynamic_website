@extends("frontend.layouts.main")

@push("title")
<title>Photos</title>
@endpush

@push("css")
<link rel="stylesheet" href="{{asset("frontend/css/photogallary-style.css")}}">
@endpush

@section("main-content")
 <main>
    <!-- main start -->
    {{-- <div class="container-1"> --}}
        <div class="cntnr-title">
            <div style="text-align: center; place-items: center;">
                <h1>
                    System Bull ICT College Photo Gallery
                </h1>
            </div>
        </div>
    {{-- </div> --}}
    <div class="photo-cntnr">
    @foreach ( $images as $image )    
        <div class="image">
            <img src="{{ asset('storage/'.$image->images) }}" width='400px' >
        </div>
        @endforeach
    </div>
    <!-- main end -->
    </main>
@endsection
