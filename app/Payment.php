<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable =['valor_efectivo','valor_electronico'];
	
     public function registro(){

            return $this->belongsTo(Registro::class);
    }

     public function scopeFecha($query, $created_at){

    	if($created_at)
            return $query->where('created_at', 'LIKE', "%$created_at%");
    }
}
