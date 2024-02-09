<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\Items;
// use Faker\Core\File;

class SupplierController extends Controller
{
    public function itemList()
    {
        $user = Auth::user();
        $item = Items::all();
        return view('Supplier.Item', ['user' => $user, 'item' => $item]);
    }

    public function profileSupplier()
    {
        $user = Auth::user();
        return view('Supplier.profile.profile', ['user' => $user]);
    }

    public function profileChangeSupplier()
    {
        $user = Auth::user();
        return view('Supplier.profile.change_pass', ['user' => $user]);
    }

    public function ppmp()
    {
        $user = Auth::user();
        return view('Supplier.Po', ['user' => $user]);
    }

    public function storeItem(Request $request)
    {
        $request->validate([
            'item_name' => 'required',
            'item_description' => 'required',
            'item_price' => 'required',
            'date_creation' => 'required',
            'date_expiration' => 'required',
            'status' => 'required',
            'item_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $fileName = null; // Initialize fileName to null

        if ($request->hasFile('item_image')) {
            $fileName = time() . '.' . $request->item_image->extension();
            $request->item_image->storeAs('public/images', $fileName);
        }

        $item = new Items;
        $item->item_name = $request->input('item_name');
        $item->item_description = $request->input('item_description');
        $item->item_price = $request->input('item_price');
        $item->date_creation = $request->input('date_creation');
        $item->date_expiration = $request->input('date_expiration');
        $item->status = $request->input('status');
        $item->item_image = $fileName;
        $item->save();

        // Items::create($request->post());
        return back()->with('success', 'Product created successfully.');
    }

    public function updateItem(Request $request, $id)
    {
        $item = Items::findOrFail($id);
        $item->update($request->all());

        $fileName = null; // Initialize fileName to null

        if ($request->hasFile('item_image')) {
            $fileName = time() . '.' . $request->item_image->extension();
            $request->item_image->storeAs('public/images', $fileName);
            $item->item_image = $fileName;
        }
        $item->save();

        // $model = Items::findOrFail($id);

        // // Check if a new image file is uploaded
        // if ($request->hasFile('item_image')) {
        //     // Upload the new image file
        //     $imagePath = $request->file('item_image')->store('public/images');

        //     // Update the image field with the new image path
        //     $model->item_image = $imagePath;
        // }

        // Save the model
        // $model->save();

        return back()->with('success', 'Product updated successfully.');
    }


    public function deleteItem($id)
    {
        $item = Items::findOrFail($id);
        $item->delete();

        return back()->with('success', 'Product deleted successfully.');
    }
}
