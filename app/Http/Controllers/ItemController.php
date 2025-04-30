<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    public function edit($id)
    {
        return view('edit', [
            'warehouses' => Warehouse::all(),
            'item' => Item::find($id)
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'warehouse_id' => 'required|exists:warehouses,id',
            'name' => 'required|unique:items,name',
            'stock' => 'required|integer',
            'type' => 'required',
            'status' => 'required|in:in,out',
            'code' => 'required|unique:items,code',
            'grade' => 'required|in:a,b,c',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imagePath = $image->store('item-photos', 'public');
            $data['photo'] = basename($imagePath);
        }

        Item::create($data);
        return to_route('dashboard');
    }

    public function update(Request $request, $id)
    {
        $item = Item::find($id);
        $data = $request->validate([
            'warehouse_id' => 'required|exists:warehouses,id',
            'name' => 'required|unique:items,name,' . $item->id,
            'stock' => 'required|integer',
            'type' => 'required',
            'status' => 'required|in:in,out',
            'code' => 'required|unique:items,code,' . $item->id,
            'grade' => 'required|in:a,b,c',
            'photo' => $request->hasFile('photo') ? 'image|mimes:jpeg,png,jpg,gif|max:2048' : ''
        ]);

        if ($request->hasFile('photo')) {
            Storage::disk('public')->delete('item-photos/' . $item->photo);
            $photo = $request->file('photo');
            $photoPath = $photo->store('item-photos', 'public');
            $photoPath = basename($photoPath);
            $data['photo'] = $photoPath;
        } else {
            unset($data['photo']);
        }

        $item->update($data);
        return to_route('dashboard');
    }



    public function delete($id)
    {
        $item = Item::find($id);
        Storage::disk('public')->delete('item-photos/' . $item->photo);
        $item->delete();
        return to_route('dashboard');
    }
}
