<?php

namespace jlsonline\models\he;

use Illuminate\Database\Eloquent\Model;

class HoraPaga extends Model
{
    protected $fillable = ['data','inicio','fim','total','user_id'];
    
    
}
