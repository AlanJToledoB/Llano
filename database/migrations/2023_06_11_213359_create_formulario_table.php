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
        Schema::create('formulario', function (Blueprint $table) {
            $table->id();
            $table->string('anio');
            $table->string('nombre_alumno');
            $table->string('primer_previa')->nullable();
            $table->string('anio_primer_previa')->nullable();
            $table->string('segunda_previa')->nullable();
            $table->string('anio_segunda_previa')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulario');
    }
};
