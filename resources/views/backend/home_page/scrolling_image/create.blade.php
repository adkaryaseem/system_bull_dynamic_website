@extends('backend.layouts.main')

@section('backend-main')

<form action="{{ route('admin.scrolling.store') }}" method="POST" enctype="multipart/form-data">
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
                    <button type="submit">Submit</button>
                </td>
            </tr>
        </table>
</form>
@endsection