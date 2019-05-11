<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Analistas extends Migration
{
    /**
     * Run the migrations.
     *
   * @return void
     */
   public function up()
    {

Schema::create('analistas', function (Blueprint $table) {

$table->engine = 'InnoDB';
$table->increments('id');
$table->string('img')->nullable() ;
$table->string('nombre')->nullable() ;
$table->string('telefono_fijo')->nullable() ;
$table->date('telefono_celular')->nullable() ;
$table->string('direccion')->nullable() ;
$table->string('ciudad')->nullable() ;



$table->bigInteger('aseguradora_id')->unsigned()->nullable() ;
$table->foreign('aseguradora_id')->references('id')->on('aseguradoras')  ->onupdate('cascade') ->onDelete('cascade');





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
        Schema::dropIfExists('analistas');
    }
}
