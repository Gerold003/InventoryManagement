<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class StockController extends Controller
{
    // Add stock
    public function add(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        $quantity = $request->query('quantity', 0);

        if ($quantity > 0) {
            $item->quantity += $quantity;
            $item->save();

            return response()->json(['success' => true, 'message' => 'Stock added successfully!']);
        }

        return response()->json(['success' => false, 'message' => 'Invalid quantity.']);
    }

    // Remove stock
    public function out(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        $quantity = $request->query('quantity', 0);

        if ($quantity > 0 && $item->quantity >= $quantity) {
            $item->quantity -= $quantity;
            $item->save();

            return response()->json(['success' => true, 'message' => 'Stock removed successfully!']);
        }

        return response()->json(['success' => false, 'message' => 'Invalid quantity or insufficient stock.']);
    }
}