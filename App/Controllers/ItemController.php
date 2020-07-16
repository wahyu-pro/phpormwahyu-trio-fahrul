<?php

namespace Demo\Controllers;

use Illuminate\Http\Request;

use Demo\Models\Item;

class ItemController
{
    public function index()
    {
        $items = Item::all();

        return response()->json($items);
    }

    public function findById($id)
    {
        $itemId = Item::find($id);

        return response()->json($itemId);
    }

    public function create(Request $request)
    {
        $item = new Item();
        $item->name = $request->input('name');
        $item->description = $request->input('description');
        $item->price = $request->input('price');
        $item->save();

        return response()->json($item);
    }

    public function update(Request $request, $id)
    {
        $item = Item::find($id);
        $item->name = $request->input('name');
        $item->description = $request->input('description');
        $item->price = $request->input('price');
        $item->save();

        return response()->json($item);
    }

    public function delete(Request $request, $id)
    {
        $item = Item::find($id);
        $item->delete();

        return response()->json($item);
    }
}