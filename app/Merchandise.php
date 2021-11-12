<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model
{
    public function category(){
        return $this->belongsTo('App\Category');
         }
    public function unit(){
        return $this->belongsTo('App\Unit');
         }
}
