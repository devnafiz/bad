<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\PersonalLoan;
class PersonalLoanTrans extends Model
{
    protected $table='personal-loan-trans';
    protected $fillable =['person_id','phone','date','debit','credit','details'];

    public function personalLoans(){

    	return $this->belongsTo('App\PersonalLoan','person_id');
    } 
}
