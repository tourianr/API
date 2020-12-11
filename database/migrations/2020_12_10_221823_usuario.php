<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuario extends Migration
{

    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nome');
            $table->string('senha');
            $table->string('cpf');
            $table->string('admin');
        });
    }

    public function down()
    {
        Schema::drop('usuario');
    }
}
