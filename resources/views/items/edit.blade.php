<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Edit Item</h1>
    <form method="POST" action="{{ route('items.update', $item) }}">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $item->name }}" required><br>

        <label for="description">Description:</label>
        <textarea name="description" id="description" required>{{ $item->description }}</textarea><br>

        <label for="price">Price:</label>
        <input type="number" name="price" id="price" step="0.01" value="{{ $item->price }}" required><br>

        <button type="submit">Update Item</button>
    </form>
    <form method="POST" action="{{ route('items.destroy', $item) }}">
    @csrf
    @method('DELETE')
    <button type="submit" class="red-button" onclick="return confirm('Are you sure you want to delete this item?')">Delete Item</button>
</form>
    <a href="{{ route('items.index') }}">Back to Items List</a>
</body>
</html>