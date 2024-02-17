<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\Items;
use App\Models\Program;
use App\Models\Ppmpdatas;
use App\Models\Ppmpitemdatas;
use Illuminate\Support\Facades\DB;
// use Faker\Core\File;

class SupplierController extends Controller
{
    public function itemList()
    {
        $user = Auth::user();
        $item = Items::all();
        $totalItem = Items::count();
        $totalItemActive = Items::all()->Where('status', 1)->count();
        $totalItemInactive = Items::all()->where('status', 2)->count();

        return view('Supplier.Item', ['user' => $user, 'item' => $item, 'totalItem' => $totalItem, 'totalActive' => $totalItemActive, 'totalInactive' => $totalItemInactive]);
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
        $program = Program::all();
        $user = Auth::user();
        $ppmp = Ppmpdatas::orderBy('created_at', 'desc')->get();
        $totalPPMP = Ppmpdatas::all()->count();
        $totalApprove = Ppmpdatas::all()->Where('status', 1)->count();
        $totalDisapprove = Ppmpdatas::all()->Where('status', 2)->count();
        $totalPending = Ppmpdatas::all()->Where('status', 3)->count();
        return view('Supplier.Po', ['user' => $user, 'ppmp' => $ppmp, 'program' => $program, 'totalApprove' => $totalApprove, 'totalPending' => $totalPending, 'totalDisapprove' => $totalDisapprove, 'totalPPMP' =>  $totalPPMP]);
    }

    public function ppmp_view($id)
    {
        $user = Auth::user();
        $ppmpdatas = Ppmpdatas::findOrfail($id);
        $joinedppmpdata = DB::table('ppmpitemdatas')
            ->join('ppmpdatas', 'ppmpitemdatas.ppmpitemID', '=', 'ppmpdatas.id')
            ->join('items', 'ppmpitemdatas.itemname', '=', 'items.id')
            ->select('ppmpitemdatas.quantity', 'ppmpitemdatas.unit', 'ppmpitemdatas.itemname', 'ppmpitemdatas.description', 'ppmpitemdatas.unitprice', 'ppmpitemdatas.total', 'items.item_name')
            ->where('ppmpitemdatas.ppmpitemID', $id)->get();

        return view('Supplier.Po_view', ['user' => $user, 'ppmpdatas' => $ppmpdatas, 'joinedppmpdata' => $joinedppmpdata]);
    }

    public function ppmp_update(Request $request, $id)
    {
        $PPMP = Ppmpdatas::findOrFail($id);
        $PPMP->update($request->all());

        $ppmpitems = Ppmpitemdatas::findOrFail($id);
        $ppmpitems->update($request->all());

        return redirect('/Supplier/PPMP_List')->with('success', 'PPMP updated successfully.');
    }


    public function ppmp_edit($id)
    {
        $program = Program::all();
        $ppmp = Ppmpdatas::all();
        $items = Items::all();
        $user = Auth::user();
        $ppmpdatas = Ppmpdatas::findOrfail($id);
        $joinedppmpdata = DB::table('ppmpitemdatas')
            ->join('ppmpdatas', 'ppmpitemdatas.ppmpitemID', '=', 'ppmpdatas.id')
            ->join('items', 'ppmpitemdatas.itemname', '=', 'items.id')
            ->select('ppmpitemdatas.quantity', 'ppmpitemdatas.unit', 'ppmpitemdatas.itemname', 'ppmpitemdatas.description', 'ppmpitemdatas.unitprice', 'ppmpitemdatas.total', 'items.item_name')
            ->where('ppmpitemdatas.ppmpitemID', $id)->get();

        return view('Supplier.Po_edit', ['user' => $user, 'ppmpdatas' => $ppmpdatas, 'joinedppmpdata' => $joinedppmpdata, 'item' => $items, 'ppmp' => $ppmp, 'program' => $program]);
    }


    public function deletePPMP($id)
    {
        $ppmp = Ppmpdatas::find($id);
        $ppmp->delete();
        Ppmpitemdatas::where('ppmpitemID', $ppmp->id)->delete();

        return back()->with('success', 'PPMP is deleted sucessfully');
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

        return back()->with('success', 'Product updated successfully.');
    }


    public function deleteItem($id)
    {
        $item = Items::findOrFail($id);
        $item->delete();

        return back()->with('success', 'Product deleted successfully.');
    }
}
