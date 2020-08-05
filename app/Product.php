<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function orders(){
        $this->hasMany(Order::class);
    }
}
