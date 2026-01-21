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
        Schema::create('modulos_formativos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ciclos_formativos_id')->constrained('ciclos_formativos')->onDelete('cascade');
            $table->string('nombre', 255);
            $table->string('codigo');
            $table->bigInteger('horas_totales');
            $table->string('curso_escolar');
            $table->string('centro');
            $table->foreignId('docente_id')->constrained('users')->onDelete('cascade');
            $table->text('descripcion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modulos_formativos');
    }
};

