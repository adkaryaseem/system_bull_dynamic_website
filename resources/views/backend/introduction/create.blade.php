@extends('backend.layouts.main')

@section('backend-main')

@include("backend.partials.navbar")

<form action="{{ route('admin.introduction.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <table>
            <tr>
                <td>
                    Image
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
                    Description
                </td>
                <td>
                   <textarea name="description" rows="30">
                   </textarea>
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