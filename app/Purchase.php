<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
     protected $table ='purchase';
     protected $fillable =['supplier_id','purchase_date','chalan_no','purchase_details','cartoon','cartoon_item','product_quantity','product_rate','total_price','grand_total_price'];
}
