<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    //showing all data from the table
    public function index(){
        $items = Item::paginate(5);
        return view('pages/item', compact('items'));
    }
    public function store(Request $request)
    {
        $item = new Item;
        $item->name_item = $request->name_item;
        $item->stock_item = $request->stock_item;
        $item->save();
        return redirect('item')->with('message','success adding data');
    }      
    public function update(request $request,$id){
        $item = Item::find($id);

        $item->name_item = $request->name_item;
        $item->stock_item = $request->stock_item;
        $item->save();

        return redirect('item')->with('message','success updating data');
    }
    public function destroy(request $request,$id){
        $item = Item::find($id);
        $item->delete();

        return redirect('item')->with('message','success deleting data');
    }
}
