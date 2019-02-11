<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['name_item','stok_item'];
    public $timestamps = false;
    public function detail(){
        return $this->hasMany('App\detail');
    }
    public function itemlist(){
        return $this->hasOne('App\Itemlist');
    }
    
}
