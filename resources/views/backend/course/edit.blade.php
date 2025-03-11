@extends('backend.layouts.main')
@push('title')
    <title>Introduction Edit</title>
@endpush
@section('backend-main')

<form action="{{ route('admin.course.update',[$course->id]) }}" method="POST">
    @csrf
    <table width="100%">
        <tr>
            <td>
                Enter new Course
                <input type="text" name="course">
            </td>
        </tr>
        <td>
                   <button type="submit">Update</button>
        </td>
    </table>
</form>

@endsection