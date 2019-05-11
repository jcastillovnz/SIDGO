<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use App\Liquidadora;
use App\User;


class ConfiguracionController extends Controller
{
    //


/*    public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('configuracion');
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
if ($request->tipo !=null ) {
$user->tipo= $request->tipo;
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
if ($request->tipo !=null ) {
$user->tipo= $request->tipo;
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
















public function monitor(Request $request)
    {

$email = User::where('email', $request->email)->first();

if ($email == true){

$data = "true";
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

















}
