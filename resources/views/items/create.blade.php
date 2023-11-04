<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>Laravel - Create Item</title>
    </head>
    <body>
        <h1>Create a New Item</h1>
        <a href="{{ route('items.index') }}">Go to Item Index</a> 
        <form method="POST" action="{{ route('items.store') }}">
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required><br>
            
            <label for="description">Description:</label>
            <textarea name="description" id="description" required></textarea><br>
            
            <label for "price">Price:</label>
            <input type="number" name="price" id="price" step="0.01" required><br>
            
            <button type="submit">Add Item</button>
        </form>
    </body>
</html>
