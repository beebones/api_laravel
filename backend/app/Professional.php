<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    protected $table = "professionals";

    public function technologies() {
        return $this->hasMany('App\Technology', 'technologies_professionals', 'professionals_id', 'technologies_id');
    }
}
