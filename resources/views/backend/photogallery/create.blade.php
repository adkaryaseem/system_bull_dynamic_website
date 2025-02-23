@extends('backend.layouts.main')

@section('backend-main')
@include("backend.partials.navbar")

@if (session()->has('message'))
    <span>
        {{ session()->get('message') }}
    </span>
    
@endif

<form action="{{ route('admin.photo.gallery.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <table>
            <tr>
                <td>
                    Image
                    @error('image')
                        <p>
                            {{ $message }}
                        </p>
                    @enderror
                </td>
                <td>
                    <input type="file" name="image" required>
                </td>
            </tr>
            <tr>
                <td>
                    Title
                </td>
                <td>
                    <input type="Text" name="title" required>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Submit</button>
                </td>
            </tr>
        </table>
</form>
@endsection