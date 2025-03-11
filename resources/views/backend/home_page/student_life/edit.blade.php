@extends('backend.layouts.main')
@push('title')
    <title>Introduction Edit</title>
@endpush
@section('backend-main')

@include("backend.partials.navbar")
<form action="{{ route('admin.studentlife.update',[$studentlife->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <table width="100%">
        <tr>
            <center>
                <td>
                   Choose new Image
                </td>
                <td>
                    <input type="file" name="image">
                </td>
            </center>
        </tr>
        <tr>
            <td>
                <center>
                       <button type="submit">Update</button>
                </center>
            </td>
        </tr>
    </table>
</form>
@endsection