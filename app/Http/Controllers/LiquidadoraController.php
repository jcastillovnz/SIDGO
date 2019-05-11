<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Liquidadora;
use App\User;
class LiquidadoraController extends Controller
{
    //











public function index(Request $request, $id){

return $liquidadora = Liquidadora::where('id', $id )->with('user')->first();


 
}



public function getliquidadoras(Request $request){



return  $liquidadoras = Liquidadora::all();



}




public function GeLiquidadora(Request $request, $id){

$liquidadora = Liquidadora::where('id', $id )->with('user')->first();



foreach ($liquidadora->user as $key => $user) {
	
if ($user->rol == 1 ) {
$supervisor = [
'id'=>$user->id,
'nombre'=>$user->name,
'apellido'=> $user->lastname];
}
else {


$supervisor = [
'id'=> null,
'nombre'=>'Sin asignar',
'apellido'=> 'Sin asignar'];


}



}



return ['liquidadora'=> $liquidadora,
'supervisor'=> $supervisor
];



}







    public function todos(Request $request)
    {
$liquidadoras = liquidadora::orderBy('id', 'desc')->paginate(5);
return [
'pagination'=> [
'total'=> $liquidadoras->total(),
'current_page'=> $liquidadoras->currentPage(),
'per_page'=> $liquidadoras->perPage(),
'last_page'=> $liquidadoras->lastPage(),
'from'=> $liquidadoras->firstItem(),
'to'=> $liquidadoras->lastPage(),
],
'liquidadoras'=> $liquidadoras,
];
}

public function create( Request $request)
    {

 
$liquidadora = new Liquidadora();

$liquidadora->nombre=  $request->nombre;
$liquidadora->email=  $request->email;
$liquidadora->telefono_fijo=  $request->telefono_fijo;
$liquidadora->telefono_celular=  $request->telefono_celular;
$liquidadora->ciudad=  $request->ciudad;
$liquidadora->codigo_postal=  $request->codigo_postal;
$liquidadora->direccion=  $request->direccion;

$liquidadora->save();

if ($liquidadora->save()==true) {
$data = "true";
return response()->json($data); 
}

else {
$data = "false";
return response()->json($data); 
}


}


public function update( Request $request)
    {

$liquidadora = Liquidadora::where('id', $request->id)->first();



$liquidadora->nombre=  $request->nombre;
$liquidadora->email=  $request->email;
$liquidadora->telefono_fijo=  $request->telefono_fijo;
$liquidadora->telefono_celular=  $request->telefono_celular;
$liquidadora->ciudad=  $request->ciudad;
$liquidadora->codigo_postal=  $request->codigo_postal;
$liquidadora->direccion=  $request->direccion;


$liquidadora->save();

if ($liquidadora->save()==true) {
$data = "true";
return response()->json($data); 
}

else {
$data = "false";
return response()->json($data); 
}


}



public function monitor(Request $request)
    {

$email = Liquidadora::where('email', $request->email)->first();

if ($email == true){

$data = "true";
return response()->json($data); 

}

}



 public function delete(Request $request, $id)
  {


$liquidadora = Liquidadora::where('id', $id)->first();




return [
'dato'=> $liquidadora->delete(),
];






}







public function DeleteLogo($id, Request $request)
{

$liquidadora = Liquidadora::where('id', $id)->first();
$liquidadora ->img = null;


$data = $liquidadora->save();

return response()->json($data); 

}



public function SubirLogo($id, Request $request)
{

$liquidadora = Liquidadora::where('id', $id)->first();

if ($request->hasFile('foto')===true ){
$file = $request->file('foto');
$img = 'img_'.time().'.'.$file->getClientOriginalExtension();


$path = public_path().'/img/liquidadoras/logos/';
$file->move($path,$img );
$liquidadora->img =$img  ;
$liquidadora->save();


if ($liquidadora->save()==true) {
$data = $img ;
return response()->json($data); 
}
else {
$data = "false";
return response()->json($data); 
}

}



}















}
