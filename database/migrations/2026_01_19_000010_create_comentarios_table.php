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
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('evidencia_id')->constrained('evidencias')->onDelete('cascade'); //evidencias (tabla)
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); //users (tabla)
            $table->text('comentario');
            $table->enum('tipo', ['profesor', 'estudiante']);
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};
