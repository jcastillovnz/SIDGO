<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class asegurado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asegurados', function (Blueprint $table) {


$table->engine = 'InnoDB';

$table->increments('id');
$table->string('nombre');
$table->string('apellido');
$table->string('dni')->nullable() ;
$table->string('telefono')->nullable() ;
$table->string('edad') ->nullable() ;
$table->string('ocupacion')->nullable();
$table->timestamp('created_at')->nullable();



$table->bigInteger('aseguradoras_id')->unsigned()->nullable() ;
$table->foreign('aseguradoras_id')->references('id')->on('aseguradoras')  ->onupdate('cascade') ->onDelete('cascade');




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asegurados');
    }
}
