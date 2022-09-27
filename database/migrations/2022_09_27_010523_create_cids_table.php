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
        Schema::create('cids', function (Blueprint $table) {
            $table->id();
            $table->string('cod_cid');
            $table->string('descricao');
            $table->longText('variaveis')->nullable();
            $table->string('cod_estadiamento')->nullable();
            $table->string("estagio")->nullable();
            $table->string("upstaging")->nullable();
            $table->string("downtaging")->nullable();
            $table->string("nomigration")->nullable();
            $table->longText("exames_recomendados")->nullable();
            $table->longText("tratamentos_recomendados")->nullable();
            $table->longText("medicamentos_recomendados")->nullable();
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
        Schema::dropIfExists('cids');
    }
};
