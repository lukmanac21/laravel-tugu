<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    //showing all data from the table
    public function index(){
        return Item::all();
    }  
    public function create(request $request){
        $item = new Item;
        $item->name_item = $request->name_item;
        $item->stock_item = $request->stock_item;
        $item->unit_item = $request->unit_item;
        $item->save();

        return("Success to add new data !");
    }  
    public function update(request $request,$id){
        $item = Item::find($id);

        $item->name_item = $request->name_item;
        $item->stock_item = $request->stock_item;
        $item->unit_item = $request->unit_item;
        $item->save();

        return("Success updating data !");
    }
    public function delete(request $request,$id){
        $item = Item::find($id);
        $item->delete();

        return ("Data has been deteled !");
    }
}
