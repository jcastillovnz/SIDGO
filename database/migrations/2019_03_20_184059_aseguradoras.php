<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Aseguradoras extends Migration
{
    /**
     * Run the migrations.
     *
   * @return void
     */
   public function up()
    {

Schema::create('aseguradoras', function (Blueprint $table) {

$table->engine = 'InnoDB';
$table->bigIncrements('id');
$table->string('img')->nullable() ;
$table->string('nombre')->nullable() ;
$table->string('email')->nullable() ;
$table->string('telefono-fijo')->nullable() ;
$table->string('telefono-celular')->nullable() ;



$table->bigInteger('liquidadora_id')->unsigned()->nullable() ;
$table->foreign('liquidadora_id')->references('id')->on('liquidadoras');
 


$table->timestamps();


        });



     










    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aseguradoras');
    }
}
