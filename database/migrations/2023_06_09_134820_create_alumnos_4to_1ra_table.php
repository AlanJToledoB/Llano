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
        Schema::create('alumnos_4to_1ra', function (Blueprint $table) {
            $table->increments('ID_alumno');
            $table->string('NOMBRE');
            $table->unsignedInteger('id_año');
            $table->foreign('id_año')->references('id_año')->on('anos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos_4to_1ra');
    }
};
