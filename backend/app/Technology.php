<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    protected $table = "technologies";

    public function professionals() {
        return $this->belongsToMany('App\Professional', 'technologies_professionals', 'technologies_id', 'professionals_id');
    }
}
