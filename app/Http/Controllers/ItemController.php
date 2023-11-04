<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item; 

class ItemController extends Controller
{
    public function create()
    {
        return view('items.create'); 
    }

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        
        Item::create($validatedData);

        return redirect()->route('items.create')->with('success', 'Item created successfully!');
    }

    

    public function index()
{
    $items = Item::all();
    return view('items.index', compact('items'));
}

public function show(Item $item)
{
    return view('items.show', compact('item'));
}

public function edit(Item $item)
{
    return view('items.edit', compact('item'));
}

public function update(Request $request, Item $item)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',
    ]);

    $item->update($validatedData);

    return redirect()->route('items.index')->with('success', 'Item updated successfully!');
}

public function destroy(Item $item)
{
    $item->delete();
    return redirect()->route('items.index')->with('success', 'Item deleted successfully');
}

public function delete(Item $item)
{
    $item->delete();
    return redirect()->route('items.index')->with('success', 'Item deleted successfully!');
}



}
