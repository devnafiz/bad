<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table ='account';
    protected $fillable =['account_name','parent_id'];
}
