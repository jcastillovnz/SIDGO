<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Liquidadoras extends Migration
{
    /**
     * Run the migrations.
     *
    * @return void
     */
   public function up()
    {

Schema::create('liquidadoras', function (Blueprint $table) {

$table->engine = 'InnoDB';
$table->bigIncrements('id');
$table->string('img')->nullable() ;
$table->string('nombre')->nullable() ;
$table->string('email')->nullable() ;
$table->string('telefono_fijo')->nullable() ;
$table->string('telefono_celular')->nullable() ;
$table->string('ciudad')->nullable() ;
$table->string('direccion')->nullable() ;
$table->string('codigo_postal')->nullable() ;
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
        Schema::dropIfExists('liquidadoras');
    }
}
