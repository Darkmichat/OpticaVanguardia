<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegistroFormRequest;
use App\Http\Requests;
use App\Registro;
use Carbon\Carbon;
USE DB;

class FiltrarController extends Controller
{
    public function index(Request $request){

        $estado     = $request->get('estado');
        $primer_dia =  $request->get('primer_dia');
        $ultimo_dia =  $request->get('ultimo_dia');



        $registros = Registro::orderBy('id', 'DESC')
        
        ->estado($estado)
        ->whereBetween('updated_at',[$primer_dia,$ultimo_dia])
        ->paginate(20);
      
        
        return view('filtrar.index', compact('registros'));
    }
}
