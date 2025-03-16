@extends('backend.layouts.main')
@push('title')
    <title>Dashboard</title>
@endpush
@section('backend-main')
    <section class="content">
        @include('backend.partials.header')
        <div class="container-fluid">
                <img src="{{ asset('frontend/image/logo.png') }}" alt="logo">
                <h1>Welcome to the System Bull ICT College Cpanel</h1>
                <h1>
                    System Bull ICT College Cpanel Dashboard
                </h1>
        </div>
    </section>
@endsection
