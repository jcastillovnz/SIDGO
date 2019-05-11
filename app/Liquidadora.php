<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liquidadora extends Model
{
    //
public $table = "liquidadoras";








public function user()
{
	
    return $this->hasMany('App\User' , 'liquidadora_id');

}




public function aseguradora()
{
	
    return $this->hasMany('App\Aseguradora' , 'aseguradora_id');

}















}
