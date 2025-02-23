@extends("frontend.layouts.main")

@push("title")
<title>Introduction</title>
@endpush

@push("css")
<link rel="stylesheet" href="{{asset("frontend/css/program-style.css")}}">
@endpush

@section("main-content")
<main>
    <!-- main start -->
    <div class="container-1">
        <div class="cntnr-title">
            Programs
        </div>
    </div>
    <div class="container-2">
        <img src="{{asset("frontend/image/noimage.jpg")}}" />
        <div class="text">
            Programs
        </div>
    </div>
    <!-- main end -->
</main>
@endsection