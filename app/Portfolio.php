<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Filter;

class Portfolio extends Model
{
    
    public function filter(){
        
        return $this->belongsTo('App\Filter');
    }
}
