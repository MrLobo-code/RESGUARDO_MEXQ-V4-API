<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipo',function(Blueprint $table){
            $table->string('codigo');/*->unique();*/
            $table->string('nomina');
            $table->string('phone');
            $table->string('name');
            $table->string('puesto');
            $table->string('email');
            $table->string('sucursal');
            $table->string('planta_depto');
            $table->string('type');
            $table->string('status');
            $table->string('brand');
            $table->string('model');
            $table->string('serial_number');
            $table->string('product_number');
            $table->string('bill_number');
            $table->string('fecha');
            $table->string('provider');
            $table->string('comments');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
