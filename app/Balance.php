<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{

	protected $table ='cradit_balance';
    protected $fillable=['balance','customer_id'];
    protected $primaryKey ='id';
    
    public function customers(){

    	return $this->belongsTo('App\Customer');
    }
}
