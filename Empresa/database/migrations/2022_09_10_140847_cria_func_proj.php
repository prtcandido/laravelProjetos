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
        Schema::create('funcionario_projeto', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('funcionario_id')->unsigned();
            $table->bigInteger('projeto_id')->unsigned();
            $table->timestamps();
            $table->foreign(['funcionario_id'])->references('id')->on('funcionarios');
            $table->foreign(['projeto_id'])->references('id')->on('projetos');
            $table->unique(['funcionario_id','projeto_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionario_projeto');
    }
};
