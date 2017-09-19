<?php
 
namespace App\Http\Controllers;
 
use App\Uvicaciones;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
 
class UvicacionesController extends Controller{
 
 
    public function index(){
 
        $Uvicaciones  = Uvicaciones::all();
 
        return response()->json($Uvicaciones);
 
    }
 
    public function getuvicaciones($id){
 

    }
 
    public function createuvicaciones(Request $request){

        $Uvicaciones = new Uvicaciones;
        $Uvicaciones->Imei = $request->input('Imei');
        $Uvicaciones->dt_tracer = $request->input('dt_tracer');
        $Uvicaciones->lat = $request->input('lat');
        $Uvicaciones->lng = $request->input('lng');
        $Uvicaciones->save();
        return response()->json($Uvicaciones);

    }
 
    public function deleteuvicaciones($id){

    }
 
    public function updateuvicaciones(Request $request,$id){

    }


 
}