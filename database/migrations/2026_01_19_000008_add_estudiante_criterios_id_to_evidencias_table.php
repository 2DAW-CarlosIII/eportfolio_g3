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
        Schema::table('evidencias', function (Blueprint $table) {
            $table->foreignId('estudiante_id')->after('id')->constrained('users')->onDelete('cascade');
            $table->foreignId('criterio_evaluacion_id')->after('estudiante_id')->constrained('criterios_evaluacion')->onDelete('cascade');
            $table->dropColumn('tarea_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('evidencias', function (Blueprint $table) {
            //$table->dropColumn('estudiante_id');
            //$table->dropColumn('criterio_evaluacion_id');
        });
    }
};
