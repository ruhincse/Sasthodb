<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Agentinfo extends Model
{
    public function user(){

        return $this->belongsTo(User::class,'user_id','id');
    }


    public function area(){

        return $this->belongsTo(Servicearea::class,'area_id','id');
    }
}
