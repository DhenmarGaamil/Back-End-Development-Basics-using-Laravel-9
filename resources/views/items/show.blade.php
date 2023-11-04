<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>{{ $item->name }}</h1>
    <p>Description: {{ $item->description }}</p>
    <p>Price: ${{ number_format($item->price, 2) }}</p>
    <a href="{{ route('items.index') }}">Back to Items List</a>
</body>
</html>