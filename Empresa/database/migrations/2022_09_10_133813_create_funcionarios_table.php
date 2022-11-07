<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome',100)->unique();
            $table->string('endereco',100);
            $table->date('dataNasc');
            $table->bigInteger('departamento_id')->nullable()->unsigned();
            $table->timestamps();
            $table->foreign(['departamento_id'])->references('id')->on('departamentos');
        });
    }

    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
};
