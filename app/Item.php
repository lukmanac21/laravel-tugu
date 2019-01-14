<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = array('name_item','stok_item','unit_item');
    public $timestamps = false;
}
