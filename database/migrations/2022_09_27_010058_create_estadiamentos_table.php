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
        Schema::create('estadiamentos', function (Blueprint $table) {
            $table->id();
            
            $table->string("cid");
            $table->string("codigoestadiamento")->nullable();
            $table->string("estagio")->nullable();
            $table->string("upstaging")->nullable();
            $table->string("downtaging")->nullable();
            $table->string("nomigration")->nullable();
            $table->longText("exames_recomendados")->nullable();
            $table->longText("tratamento")->nullable();
            $table->longText("medicamentos")->nullable();
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
        Schema::dropIfExists('estadiamentos');
    }
};
