<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Liquidadora;
use App\User;
use App\Aseguradora;


class AseguradoraController extends Controller
{
    





public function index(Request $request, $id){

$aseguradora = Aseguradora::where('id', $id )->with('analista')->with('liquidadora')->first();


return view('liquidadoras.aseguradoras.index', compact('aseguradora'));


}

public function getAseguradora(Request $request, $id){

$aseguradora = Aseguradora::where('id', $id )->with('analista')->with('liquidadora')->first();

return [
'aseguradora'=> $aseguradora,
];




}









public function create( Request $request)
    {

 
$aseguradora = new Aseguradora();

$aseguradora->nombre=  $request->nombre;
$aseguradora->email=  $request->email;
$aseguradora->telefono_fijo=  $request->telefono_fijo;
$aseguradora->telefono_celular=  $request->telefono_celular;
$aseguradora->liquidadora_id=  $request->liquidadora_id;

$aseguradora->save();

if ($aseguradora->save()==true) {
$data = "true";
return response()->json($data); 
}

else {
$data = "false";
return response()->json($data); 
}


}




    public function todas(Request $request, $id)
    {



$aseguradoras = Aseguradora::where('liquidadora_id', $id)->orderBy('id', 'desc')->paginate(5);




return [
'pagination'=> [
'total'=>$aseguradoras->total(),
'current_page'=>$aseguradoras->currentPage(),
'per_page'=> $aseguradoras->perPage(),
'last_page'=> $aseguradoras->lastPage(),
'from'=> $aseguradoras->firstItem(),
'to'=> $aseguradoras->lastPage(),
],
'aseguradoras'=> $aseguradoras,
];






}






public function delete($id, Request $request)
{

$user = Aseguradora::where('id', $id)->first();


return [
'dato'=> $user->delete(),
];

}




public function update( Request $request)
    {

 
$aseguradora = Aseguradora::where('id', $request->id)->first();

$aseguradora->nombre=  $request->nombre;
$aseguradora->email=  $request->email;
$aseguradora->telefono_fijo=  $request->telefono_fijo;
$aseguradora->telefono_celular=  $request->telefono_celular;
$aseguradora->liquidadora_id=  $request->liquidadora_id;

$aseguradora->save();

if ($aseguradora->save()==true) {
$data = "true";
return response()->json($data); 
}

else {
$data = "false";
return response()->json($data); 
}


}













}
