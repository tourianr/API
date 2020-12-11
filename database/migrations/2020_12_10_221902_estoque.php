<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Estoque extends Migration
{
    public function up()
    {
        Schema::create('estoque', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nome');
            $table->integer('qtde');
            $table->string('valorcompra');
        });
    }

    public function down()
    {
        Schema::drop('estoque');
    }
}
