<?php

namespace Demo\Controllers;

use Illuminate\Http\Request;

use Demo\Models\Item;

class ItemController
{
    public function index()
    {
        $items = Item::all();

        return $items;
    }

    public function findById($id)
    {
        $itemId = Item::find($id);

        return $itemId;
    }

    public function create($object)
    {
        $item = new Item();
        $item->name = $object->name;
        $item->description = $object->description;
        $item->price = $object->price;
        $item->save();

        return $item;
    }

    public function update($object, $id)
    {
        $item = Item::find($id);
        $item->name = $object->name;
        $item->description = $object->description;
        $item->price = $object->price;
        $item->save();

        return $item;
    }

    public function delete($id)
    {
        $item = Item::find($id);
        $item->delete();

        return $item;
    }
}