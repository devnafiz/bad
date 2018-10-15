<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ofcloan extends Model
{
    protected $table ='ofc-loan';
    protected $fillable = ['name','phone','address'];
}
