@extends('backend.layouts.main')
@push('title')
    <title>Dashboard</title>
@endpush
@section('backend-main')
    {{-- <div class="d-flex">
        <div class="cntnr">
            <a href="{{ route('admin.introduction.index') }}">About Introduction</a>
        </div>
        <div class="cntnr">
            <a href="{{ route('admin.photo.gallery.index') }}">Photo gallary</a>
        </div>
        <div class="cntnr">
            <a href="">contact Us</a>
        </div>
        <div class="cntnr">
            <a href="{{ route('admin.course.index') }}">Form Course</a>
        </div>
        <div class="cntnr">
            <a href="{{ route('admin.countries.index') }}">Form Country</a>
        </div>
    </div>
    <div class="d-flex">
        <div class="cntnr">
            <a href="{{ route('admin.scrolling.index') }}">Home Scrolling Image</a>
        </div>
        <div class="cntnr">
            <a href="{{ route('admin.chairmanmessage.index') }}">Home Chairman Message and Image</a>
        </div>
        <div class="cntnr">
            <a href="{{ route('admin.testimonials.index') }}">Home Student Testimonials</a>
        </div>
        <div class="cntnr">
             <a href="{{ route('admin.homeintroduction.index') }}">Home Introduction</a>
        </div>
        <div class="cntnr">
            <a href="{{ route('admin.whybull.index') }}">Why Bull</a>
       </div>
    </div> --}}
        <section class="content">
            <div class="container">
                <div class="text">
                    <img src="{{ asset('frontend/image/logo.png') }}" alt="logo">
                   <h1>Welcome to the System Bull ICT College Cpanel</h1>
                    <h1>
                        System Bull ICT College Cpanel Dashboard
                    </h1>
                </div>
            </div>
        </section>
@endsection
