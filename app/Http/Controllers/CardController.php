<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\Detail;

class CardController extends Controller
{
    public function __construct(Card $card, Detail $detail){
        $this->card = $card;
        $this->detail = $detail;
    }
    public function create(){
        
    }
}
