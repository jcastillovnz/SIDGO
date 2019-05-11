<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Analista extends Model
{
    //

public $table = "analistas";








public function aseguradora()
{
  return $this->belongsTo('App\Aseguradora', 'aseguradora_id');
}
















}
