<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Confirm Deletion</h1>
    <p>Are you sure you want to delete this item?</p>
    <form method="POST" action="{{ route('items.delete', $item) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Confirm Delete</button>
    </form>
    <a href="{{ route('items.index') }}">Cancel</a>
</body>
</html>