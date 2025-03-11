@extends('backend.layouts.main')

@section('backend-main')

@if (session()->has("message"))
    <p style="background-color: aqua ; color: brown ;">
        {{ session()->get("message") }}
    </p>
@endif
<form action="{{ route('admin.countries.store') }}" method="POST">
    @csrf
        <table>
                <td>
                    Country Name
                </td>
                <td>
                    <input type="Text" name="country" required>
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