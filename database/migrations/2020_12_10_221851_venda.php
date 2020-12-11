<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Venda extends Migration
{
    public function up()
    {
        Schema::create('venda', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('data');
            $table->string('valor');
            $table->integer('id_pedidos');
        });
    }

    public function down()
    {
        Schema::drop('venda');
    }
}
