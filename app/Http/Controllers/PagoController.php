<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Pago;
use App\Registro;
use App\Payment;
use App\Task;
use Carbon\Carbon;
USE DB;

class PagoController extends Controller
{   

     public function __construct(){
        $this->middleware('auth');
    }
    
   public function index(Request $request){
        $registros = Registro::all();
   		$created_at  = $request->get('created_at');
        $registro_id  = $request->get('registro_id');
        $pagos = Payment::orderBy('id', 'DESC')
        ->fecha($created_at)
        ->nombre($registro_id)
        ->paginate(20);
    
        return view('pagos.index', compact('pagos','registros'));
    }

     public function create()
    {
        $registros = Registro::all();
         return view('pagos.create', compact('registros'));
    }



    public function store(Request $request)
    {
        $pagos = new Payment();
        $pagos->valor_efectivo= $request->input('valor_efectivo');
        $pagos->valor_electronico= $request->input('valor_electronico');
        $pagos->registro_id= $request->input('registro_id');
        $pagos->save();


        return redirect('/pago')->with('success','Pago creado correctamente!');
    }



}




