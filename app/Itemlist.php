<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itemlist extends Model
{
    protected $fillable = ['id_item','stok_item'];
    public $timestamps = false;
    public function item(){
        return $this->belongsTo('App\Item','id_item');
    }
}
