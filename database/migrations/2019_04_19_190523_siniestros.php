<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Siniestros extends Migration
{
    /**
     * Run the migrations.
     *
       * @return void
     */
   public function up()
    {

Schema::create('siniestros', function (Blueprint $table) {

$table->engine = 'InnoDB';
$table->increments('id');
$table->string('numero')->nullable() ;
$table->string('poliza')->nullable() ;
$table->string('aseguradora')->nullable() ;
$table->date('fecha_denuncia')->nullable() ;
$table->date('fecha_siniestro')->nullable() ;
$table->string('analista')->nullable() ;
$table->longText('descripcion')->nullable() ;

$table->longText('moneda')->nullable() ;
$table->string('importe')->nullable() ;


$table->bigInteger('aseguradoras_id')->unsigned()->nullable() ;
$table->foreign('aseguradoras_id')->references('id')->on('aseguradoras')  ->onupdate('cascade') ->onDelete('cascade');





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
        Schema::dropIfExists('siniestros');
    }
}
