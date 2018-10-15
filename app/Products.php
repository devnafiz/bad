<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    
    protected $table ='products';
     protected $primarykey='id';
    protected $fillable=['name','p_model','bar_code','category_id','dtails','carton_qty','sell_price','supplier_price','supplier','image'];
}
