<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table ='customers';
    protected $fillable=['name','email','phone','address','balance'];
    protected $primaryKey ='id';


    public function balances(){
    	return $this->hasMany('App\Balance');
    }
}
