<!-- create.blade.php -->
@extends('layouts.admin_master')

@section('content')

<form action="/location/store" method="post">
    @csrf

    <label for="country">Country:</label>
    <input type="text" name="country" required>

    

    <label for="state">State:</label>
    <input type="text" name="state" required>

    <label for="lga">Local Government:</label>
    <input type="text" name="lga" required>

    <button type="submit">Submit</button>
</form>
@endsection