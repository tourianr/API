<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Produto extends Migration
{
    public function up()
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nome');
            $table->string('valor');
            $table->integer('id_pedidos');
        });
    }

    public function down()
    {
        Schema::drop('venda');
    }
}
