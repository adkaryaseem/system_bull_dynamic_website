@extends('backend.layouts.main')
@push('title')
    <title>Introduction Edit</title>
@endpush
@section('backend-main')
<form action="{{ route('admin.introduction.update',[$introduction->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <table width="100%">
        <tr>
            <td>
                Enter new title
            </td>
            <td>
                <input type="text" name="title">
            </td>
        </tr>
        <tr>
            <td>
               Choose new Image
            </td>
            <td>
                <input type="file" name="image">
            </td>
        </tr>
        <tr>
            <td>
                Enter New Description
            </td>
            <td>
                {{-- <input type="text" name="description"> --}}
                <textarea name="description" rows="10"></textarea>
            </td>
        </tr>
        <td>
            <center>
                   <button type="submit">Update</button>
            </center>
        </td>
    </table>
</form>

@endsection