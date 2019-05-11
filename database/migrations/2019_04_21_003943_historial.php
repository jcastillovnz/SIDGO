<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Historial extends Migration
{
    /**
     * Run the migrations.
     *
       * @return void
     */
   public function up()
    {

Schema::create('historial', function (Blueprint $table) {

$table->engine = 'InnoDB';
$table->increments('id');
$table->string('nota')->nullable() ;
$table->date('fecha')->nullable() ;




$table->integer('siniestros_id')->unsigned()->nullable() ;
$table->foreign('siniestros_id')->references('id')->on('siniestros')  ->onupdate('cascade') ->onDelete('cascade');


$table->bigInteger('users_id')->unsigned()->nullable() ;
$table->foreign('users_id')->references('id')->on('users');

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
        Schema::dropIfExists('historial');
    }
}
