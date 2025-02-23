@extends("frontend.layouts.main")
@push("title")
<title>Management Team</title>
@endpush
@push("css")
<link rel="stylesheet" href="{{ asset("frontend/css/management-team-style.css")}}">
@endpush
@section("main-content")
<main>
    <div class="container-1">
        <div class="cntnr-title">
           Our Management Team
        </div>
    </div>
    <div class="management-team-image">
        <img src="{{asset("frontend/image/mngmt-team.jfif")}}"/>
    </div>
</main>
@endsection