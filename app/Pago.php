<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{	
	protected $fillable =['valor_efectivo','valor_electronico'];
	
   

    public function scopeFecha($query, $created_at){

    	if($created_at)
            return $query->where('created_at', 'LIKE', "%$created_at%");
    }

}
