<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank_transtion extends Model
{
    protected $table ='bank_trans';
    protected $fillable =['bank_id','debit','credit','description','deposite_id','amount'];

    public function banks(){

    	return $this->belongsTo('App\Bank');
    }
}
