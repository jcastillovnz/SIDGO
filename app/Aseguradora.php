<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aseguradora extends Model
{
    //



public $table = "aseguradoras";




public function analista()
{
    return $this->hasMany('App\Analista' );

}




public function liquidadora()
{
   
return $this->belongsTo('App\Liquidadora');
}












}
