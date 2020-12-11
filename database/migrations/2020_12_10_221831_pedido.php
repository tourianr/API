<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pedido extends Migration
{
    public function up()
    {
        Schema::create('pedido', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('valor');
            $table->string('status');
            $table->integer('id_usuario');
            $table->integer('id_vendas');
            $table->integer('id_produto');
        });
    }

    public function down()
    {
        Schema::drop('pedido');
    }
}
