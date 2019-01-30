<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = array('id','id_item','id_cardstock','qty_item','description');
    public $timestamps = false;
    public function card(){
        return $this->belongsTo('App\Card');
    }
    public function item(){
        return $this->belonsTo('App\Item');
    }
}
