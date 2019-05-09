<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\RegistroFormRequest;
use App\Http\Requests;
use App\Registro;
use App\Pago;
use Carbon\Carbon;
USE DB;

class RegistroController extends Controller
{
    public function index(Request $request){

        

    	$nombre_usuario  = $request->get('nombre_usuario');
        $estado_pago          = $request->get('estado_pago');
        $registros = Registro::orderBy('id', 'DESC')
        ->name($nombre_usuario)
        ->paginate(20);
    
        return view('registros.index', compact('registros'));
    }

    

	 public function create() 
    {

        /* HABILITAR PARA LA VISTA CREATE SIN MODAL */

       /*$tipos = Tipo::all();
        return view('articulos.create', compact('tipos'));*/
    }

    public function store(Request $request)
    {
        $registros = new Registro();
        $registros->ot= $request->input('ot');
        $registros->nombre_usuario= $request->input('nombre_usuario');
        $registros->rut= $request->input('rut');
        $registros->fono= $request->input('fono');
        $registros->fecha_receta= $request->input('fecha_receta');
        $registros->valor_pagar= $request->input('valor_pagar');
        $registros->estado_pago= $request->input('estado_pago');
        $registros->estado_tran= $request->input('estado_tran');
        $registros->save();


        return redirect('/registro')->with('success','Registro creado correctamente!');
    }

     public function edit($id)
    {
        $registro=Registro::findOrFail($id); 
        


        /*HABILITAR PARA LA VISTA EDIT NO MODAL*/
        /*return view("articulos.editmodal",["articulo"=>$articulo,"tipos"=>$tipos]);*/

        
    }

    public function update(Request $request, $id){

        $registros=Registro::find($id);

        $registros->ot= $request->get('ot');
        $registros->nombre_usuario= $request->get('nombre_usuario');
        $registros->rut= $request->get('rut');
        $registros->fono= $request->get('fono');
        $registros->fecha_receta= $request->get('fecha_receta');
        $registros->valor_pagar= $request->get('valor_pagar');
        $registros->estado_pago= $request->get('estado_pago');
        $registros->estado_tran= $request->get('estado_tran');
        $registros->update();
        

        return redirect('/registro')->with('success','Registro actualizado correctamente!');
    }

    

    public function destroy($id){
    
        $registro = Registro::find($id);
        $registro->delete();
        return redirect('/registro')->with('warning', 'Registro eliminado correctamente!');
    }
}
