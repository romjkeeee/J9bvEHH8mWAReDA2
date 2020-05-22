<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station  extends Model
{
    protected $guarded = ['id'];

    public function city() {
        return $this->hasOne(City::class,'id','city_id');
    }
}
