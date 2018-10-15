<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $table ='bank';
    protected $fillable=['bank_name','acc_number','acc_name','branch','	image'];

    public function bank_trans(){

    	return $this->hasMany('App\Bank_transtion');
    }
}
