<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\User;
use Session;
use Auth;
use DB;
use App\Liquidadora;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //



public function monitor(Request $request)
{
$email = User::where('email', $request->email)->first();
if ($email == true){
$data = "true";
return response()->json($data);
}
}



public function index(Request $request, $id){
$user = User::where('id', $id )->with('liquidadora')->first();
$liquidadoras = liquidadora::all();
return view('liquidadoras.miembro.index', compact('user', 'liquidadoras'));
}







public function getuser(Request $request){

$user = User::where('id', Auth::user()->id )->with('liquidadora')->first();

$liquidadoras = liquidadora::all();

return ['user'=> $user,
        'liquidadoras'=> $liquidadoras
      ];

}

 







public function updateUser( Request $request)
    {


$user = User::where('id', $request->id )->first();


$user->name=  $request->nombre;
$user->lastname=  $request->apellido;
$user->email=  $request->email;
$user->phone=  $request->telefono;

$user->ciudad=  $request->ciudad;
$user->codigo_postal=  $request->codigo_postal;
$user->direccion=  $request->direccion;
if ($request->rol !=null ) {
$user->rol = $request->rol;
}

if ($request->liquidadora_id !=null ) {
$user->liquidadora_id= $request->liquidadora_id;
}

$user->estatus = $request->estatus;


if ($request->password !=null ) {
$user->password= Hash::make($request->password);
}




$user->save();

if ($user->save()==true) {
$data = "true";
return response()->json($data); 
}

else {
$data = "false";
return response()->json($data); 
}


}



public function deleteImg ( Request $request, $id)
{

$user = User::where('id', $id)->first();
$user ->img = null;
$data = $user->save();

return response()->json($data); 




}

    public function getusers()
    {

$users = User::orderBy('id', 'desc')->with('liquidadora')  ->paginate(5);
$liquidadoras = Liquidadora::all();



return [
'pagination'=> [
'total'=> $users->total(),
'current_page'=> $users->currentPage(),
'per_page'=> $users->perPage(),
'last_page'=> $users->lastPage(),
'from'=> $users->firstItem(),
'to'=> $users->lastPage(),
],
'liquidadoras'=> $liquidadoras,
'users'=> $users,
];


    }

public function createUser( Request $request)
    {


 
$user = new User();

$user->name=  $request->nombre;
$user->lastname=  $request->apellido;
$user->email=  $request->email;
$user->phone=  $request->telefono;


if ($request->rol !=null ) {
$user->rol= $request->rol;
}

$user->estatus = $request->estatus;
$user->liquidadora_id=  $request->liquidadora_id;
if ($request->password !=null ) {
$user->password= Hash::make($request->password);
}

$user->save();

if ($user->save()==true) {
$data = "true";
return response()->json($data); 
}

else {
$data = "false";
return response()->json($data); 
}


}



 public function deleteUser(Request $request, $id)
  {

$user = User::where('id', $id);

return [
'dato'=> $user->delete(),
];

}





public function cargarImg ($id, Request $request)
{

$user = User::where('id', $id)->first();

if ($request->hasFile('foto')===true ){
$file = $request->file('foto');
$img = 'picture_'.time().'.'.$file->getClientOriginalExtension();


$path = public_path().'/img/fotos/';
$file->move($path,$img );
$user->img =$img  ;
$user->save();


if ($user->save()==true) {
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
