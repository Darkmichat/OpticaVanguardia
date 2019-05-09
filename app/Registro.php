<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Registro extends Model
{		
	use SoftDeletes;

	protected $fillable =[
        'ot',
	    'nombre_usuario',
	   	'fono',
	  	'rut',
		'estado_pago',
		'estado_tran',
		'fecha_receta',
		'valor_pagar'];

	protected $dates = ['deleted_at','created_at'];
	
    public function scopeName($query, $nombre_usuario){

    	if($nombre_usuario)
            return $query->where('nombre_usuario', 'LIKE', "%$nombre_usuario%");
    }

    public function scopeName2($query, $updated_at){

    	if($updated_at)
            return $query->where('updated_at', 'LIKE', "%$updated_at%");
    }

    public function scopeEstado($query, $estado_tran){

    	if($estado_tran)
            return $query->where('estado_tran', 'LIKE', "%$estado_tran%");
    }

     
    public function pagos(){

            return $this->hasMany(Pago::class);
    }

    public function tasks(){

            return $this->hasMany(Task::class);
    }

    public function payments(){

            return $this->hasMany(Payment::class);
    }
}
