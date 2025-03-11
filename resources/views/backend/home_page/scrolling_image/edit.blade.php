@extends('backend.layouts.main')
@push('title')
    <title>Introduction Edit</title>
@endpush
@section('backend-main')

<form action="{{ route('admin.scrolling.update',[$scrolling->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <table width="100%">
        <tr>
            <td>
               Choose new Image
            </td>
            <td>
                <input type="file" name="image">
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