<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('backend/css/dashboard-style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/header-style.css') }}">
    @stack('title')
</head>
<body>
    <main>
        @include('backend.partials.header')
    @include('backend.partials.sidebar')