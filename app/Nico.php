<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nico extends Model
{
    public function scopeControl($query, $created_at){

    	if($created_at)
            return $query->where('created_at', 'LIKE', "%$created_at%");
    }
}
