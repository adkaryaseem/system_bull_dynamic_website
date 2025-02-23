@extends('backend.layouts.main')
@push('title')
    <title>Introduction Edit</title>
@endpush
@section('backend-main')

@include("backend.partials.navbar")
<form action="{{ route('admin.countries.update',[$country->id]) }}" method="POST">
    @csrf
    <table width="100%">
        <tr>
            <td>
                Enter new Country
                <input type="text" name="country" value="{{ $country->name }}">
            </td>
        </tr>
        <tr>
            <td>
                Status
                <select name="status">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit">Update</button>
            </td>
        </tr>
    </table>
</form>

@endsection