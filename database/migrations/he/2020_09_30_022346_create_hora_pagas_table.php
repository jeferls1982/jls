<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoraPagasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        ['data','inicio','fim','total','user_id']
        Schema::create('hora_pagas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('data');
            $table->string('inicio');
            $table->string('fim');
            $table->string('total');
            $table->integer('user_id');
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
        Schema::dropIfExists('hora_pagas');
    }
}
