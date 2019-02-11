<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cardstock;
use App\Detail;
use App\Item;

class CardController extends Controller
{
    public function index(request $request){
        $cards = Cardstock::join('details', 'cardstocks.id', '=', 'details.id_cardstock')
        ->join('items', 'details.id_item', '=', 'items.id')
        ->groupBy('cardstocks.id')
        ->get();

        
        return view('pages/card',compact('cards'));
    }
    public function create(request $request){
        $card = new CardStock;
        $card->id = $request->id;
        $card->id_users = $request->id_users;
        $card->date = $request->date;
        $card->save();
        
        foreach ($request->id_item as $key => $id_item)
        {
            $qty = isset($request->qty_item[$key]) ? $request->qty_item[$key] : '0';
            $description = isset($request->description[$key]) ? $request->description[$key] : '';
            
    
            $detail = new Detail;
            $detail->id_item = $id_item;
            $detail->id_cardstock = $request->id;
            $detail->qty_item = $qty;
            $detail->description = $description;
            $detail->save();
        }

        return ("Adding to card was success !");
       
    }
    public function detail($id){
        $details =  Cardstock::join('details', 'cardstocks.id', '=', 'details.id_cardstock')
        ->join('items', 'details.id_item', '=', 'items.id')
        ->get();
        return view('pages/detail',compact('details','id'));
    }
}
