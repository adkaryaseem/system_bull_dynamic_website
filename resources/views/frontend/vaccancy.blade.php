@extends("frontend.layouts.main")

@push("title")
    <title>Vaccancy</title>
    @endpush

    @push("css")
<link rel="stylesheet" href="{{asset("frontend/css/vaccancy-style.css")}}">
@endpush
@section("main-content")
<main>
    <!-- main start -->
    <div class="container-1">
        <div class="cntnr-title">
            Vaccancy
        </div>
    </div>
    <!-- main end -->
</main>
@endsection