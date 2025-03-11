@extends('backend.layouts.main')

@push('title')
<title>Index</title>
@endpush
@section('backend-main')
<section class="content">
    <div class="container">
        <h1>Content</h1>
<a href="{{ route('admin.studentlife.create') }}">Create</a>
<table border="1" width="100%">
    <tr>
        <th>
            S.N
        </th>
        <th>
            Image
        </th>
        <th>
            Action
        </th>
    </tr>
    @foreach ($studentlife as $index=> $student)
        <tr>
            <td>
                {{ ++$index }}
            </td>
            <td>
                {!! "<img src=".asset('storage/'.$student->image)." height='150' width='150'>" !!}
            </td>
            <td>
                <a href="{{ route('admin.homeintroduction.edit',[$student->id]) }}">
                    <button type="submit">Change</button>
                </a>
                <a href="{{ route('admin.homeintroduction.delete',[$student->id]) }}">
                    <button type="reset">Delete</button>
                </a>
            </td>
        </tr>
    @endforeach
</table>

@endsection