<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function merchandises(){
        return $this->hasMany('App\Merchandise');
         } 
}
