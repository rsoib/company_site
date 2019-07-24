<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Portfolio;

class Filter extends Model
{
    
    public function portfolios(){
        
        return $this->hasMany('App\Portfolio');
    }
}
