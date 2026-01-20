<?php

namespace Database\Seeders;

use App\Models\Comentarios;
use Illuminate\Database\Seeder;

class ComentariosTableSeeder extends Seeder
{
    public function run(): void
    {
        Comentarios::truncate();

        foreach (self::$comentarios as $comentario) {
            Comentarios::insert([
                'evidencia_id' => $comentario['evidencia_id'],
                'user_id' => $comentario['user_id'],
                'comentario' => $comentario['comentario'],
                'tipo' => $comentario['tipo'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $this->command->info('¡Tabla comentarios inicializada con datos!');
    }

    public static $comentarios = [
        ['evidencia_id' => 1, 'user_id' => 1, 'comentario' => 'Comentario 1', 'tipo' => 'profesor'],
        ['evidencia_id' => 2, 'user_id' => 2, 'comentario' => 'Comentario 2', 'tipo' => 'estudiante'],
        ['evidencia_id' => 3, 'user_id' => 3, 'comentario' => 'Comentario 3', 'tipo' => 'profesor'],
        ['evidencia_id' => 4, 'user_id' => 1, 'comentario' => 'Comentario 4', 'tipo' => 'estudiante'],
        ['evidencia_id' => 5, 'user_id' => 2, 'comentario' => 'Comentario 5', 'tipo' => 'profesor'],
    ];
}
