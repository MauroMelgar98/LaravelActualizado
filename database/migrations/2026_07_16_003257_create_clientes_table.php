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
        // Schema::create('clientes', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        Schema::create('clientes', function (Blueprint $table) {
            $table->id(); //clave primaria
            $table->string('nombre',100); //tipo de dato string(cadena)
            $table->string('apellido',100);
            $table->string('ci',20)->nullable();
            $table->string('telefono',20);
            $table->string('correo',150)->nullable();
            $table->string('direccion',250)->nullable();
            $table->timestamps();//captura el tiempo de creacion y modificacion
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
