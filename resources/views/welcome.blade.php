<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
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
</html>