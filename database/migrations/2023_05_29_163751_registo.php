<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Registro', function (Blueprint $table) {
            $table->id()-> autoIncrement();
            $table->integer('cedula');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('genero');
            $table->integer('telefono');
            $table->integer('comuna');
            $table->string('barrio');
            $table->string('direccion');
            // $table->date('fechaNacimiento');
            // $table->string('municipio');
            // $table->interger('numeroPlanilla');
            // $table->string('correoElectronico');
            // $table->string('ocupacion');
            // $table->string('digitador');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('Registro');
    }
};
