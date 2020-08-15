<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function areas(){

        return $this->belongsToMany(Servicearea::class,'area_products');
    }
}
