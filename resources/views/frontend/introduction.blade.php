@extends("frontend.layouts.main")

@push("title")
    <title>Introduction</title>
@endpush
@push("css")
<link rel="stylesheet" href={{ asset("frontend/css/introduction-style.css")}}>
@endpush
@section("main-content")
   <main>
        <div class="container-1">
            <div class="cntnr-title">
                System Bull ICT College
            </div>
        </div>
        <section>
            <div class="introduction-image">
                <img src={{ asset('storage/'.$introduction->image) }} alt="no image found"/>
            </div>
            <div class="introduction-text">
                <div class="title">
                    {{ $introduction->title }}
                </div>
                <div class="intro-summary">
                    {{ $introduction->description }}
                </div>
            </div>
        </section>
    </main>
@endsection