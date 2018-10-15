<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\PersonalLoanTrans;

class PersonalLoan extends Model
{
    protected $table ='personal-loan';
    protected $fillable=['name','phone','address'];


    public function pLoanTrans(){
    	return $this->hasMany('App\PersonalLoanTrans');
    }
}
