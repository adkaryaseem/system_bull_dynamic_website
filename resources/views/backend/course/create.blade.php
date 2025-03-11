@extends('backend.layouts.main')

@section('backend-main')

@if (session()->has('message'))
    <p>
        {{ session()->get('message') }}
    </p>
@endif
<form action="{{ route('admin.course.store') }}" method="POST">
    @csrf
        <table>
                <td>
                    Course Name
                </td>
                <td>
                    <input type="Text" name="course" required>
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