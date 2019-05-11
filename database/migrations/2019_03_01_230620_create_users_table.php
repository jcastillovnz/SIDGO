<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('img')->nullable();
            $table->string('name')->nullable();
            $table->string('lastname')->nullable();
            $table->string('rol')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
             $table->string('ciudad')->nullable();
             $table->string('direccion')->nullable();
             $table->string('codigo_postal')->nullable();

          



            $table->string('estatus')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();

            $table->bigInteger('liquidadora_id')->unsigned()->nullable() ;
            $table->foreign('liquidadora_id')->references('id')->on('liquidadoras')->onDelete('cascade');





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
        Schema::dropIfExists('users');
    }
}
