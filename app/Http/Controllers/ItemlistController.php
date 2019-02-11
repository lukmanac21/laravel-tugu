<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Itemlist;
use App\Item;

class ItemlistController extends Controller
{
    public function index(){
        $itemlists = Itemlist::all();
        $items = Item::all();
        return view('pages/listitem',compact('itemlists','items'));
    }
    public function store(request $request){
        $itemlist = new Itemlist;
        $itemlist->id_item = $request->id_item;
        $itemlist->stock_item = $request->stock_item;
        $itemlist->save();
        return redirect('list')->with('message','success adding data');
    }
    public function destroy(request $request,$id){
        $itemlists = Itemlist::find($id);
        $itemlists->delete();

        return redirect('list');
    }
}
