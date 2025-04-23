<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all(); // Retrieve all items
        return view('admin.stockmanager', compact('items'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'itemName' => 'required|string|max:255',
            'category' => 'required|string',
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'unitPrice' => 'required|numeric|min:0',
            'supplier' => 'required|string|max:255',
            'dateAcquired' => 'required|date',
            'status' => 'required|string',
            'description' => 'nullable|string',
            'imageUpload' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('imageUpload')) {
            $imagePath = $request->file('imageUpload')->store('images', 'public');
        }

        // Create the item
        Item::create([
            'item_name' => $request->input('itemName'),
            'category' => $request->input('category'),
            'brand' => $request->input('brand'),
            'model' => $request->input('model'),
            'quantity' => $request->input('quantity'),
            'unit_price' => $request->input('unitPrice'),
            'supplier' => $request->input('supplier'),
            'date_acquired' => $request->input('dateAcquired'),
            'status' => $request->input('status'),
            'description' => $request->input('description'),
            'image_path' => $imagePath,
        ]);

        return redirect()->route('admin.stockmanager')->with('success', 'Item added successfully.');
    }
}