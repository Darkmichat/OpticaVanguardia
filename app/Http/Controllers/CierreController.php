<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegistroFormRequest;
use App\Http\Requests;
use App\Registro;
USE DB;



class CierreController extends Controller
{
      public function index(Request $request){

        
        $updated_at  = $request->get('updated_at');
        $registros = Registro::orderBy('id', 'ASC')
        ->name2($updated_at)
        ->paginate(30);
        
        return view('cierre.index', compact('registros'));
    }
}
