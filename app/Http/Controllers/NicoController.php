<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Registro;
use App\Nico;
USE DB;

class NicoController extends Controller
{
   public function index(Request $request)
    {
    	$created_at  = $request->get('created_at');
    	$registros = Registro::all();
        $controls = Nico::orderBy('id', 'DESC')
        ->control($created_at)
        ->paginate(2);
        
        
        return view('nicos.index', compact('controls','registros'));
}
}
