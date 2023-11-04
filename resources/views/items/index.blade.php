<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Items List</h1>
    <ul>
        @foreach ($items as $item)
            <li>
                <a href="{{ route('items.show', $item) }}">{{ $item->name }}</a>
                <a href="{{ route('items.edit', $item) }}" class="green-button">Edit</a>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('items.create') }}">
        <button>Create New Item</button>
    </a>
</body>
</html>