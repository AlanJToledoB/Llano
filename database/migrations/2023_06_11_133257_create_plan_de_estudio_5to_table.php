<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('plan_de_estudio_5to', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_materias');
            $table->string('materias_5to');
            $table->foreign('id_materias')->references('id')->on('plan_de_estudio');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_de_estudio_5to');
    }
};
