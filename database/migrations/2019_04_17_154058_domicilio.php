<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Domicilio extends Migration
{
    /**
     * Run the migrations.
     *
       * @return void
     */
   public function up()
    {

Schema::create('domicilio', function (Blueprint $table) {

$table->engine = 'InnoDB';
$table->increments('id');
$table->string('pais')->nullable() ;
$table->string('provincia')->nullable() ;
$table->string('ciudad')->nullable() ;
$table->string('calle')->nullable() ;
$table->string('numero')->nullable() ;
$table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('domicilio');
    }
}
