<?php

namespace Database\Seeders;

use Illuminate\Container\Attributes\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComentariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comentarios = [
            [
                'evidencia_id' => 1,
                'user_id' => 2,
                'comentario' => '',
                'tipo' => 'profesor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'evidencia_id' => 1,
                'user_id' => 3,
                'comentario' => '',
                'tipo' => 'estudiante',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'evidencia_id' => 2,
                'user_id' => 4,
                'comentario' => '',
                'tipo' => 'profesor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'evidencia_id' => 2,
                'user_id' => 5,
                'comentario' => '',
                'tipo' => 'estudiante',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'evidencia_id' => 3,
                'user_id' => 6,
                'comentario' => '',
                'tipo' => 'profesor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'evidencia_id' => 3,
                'user_id' => 7,
                'comentario' => '',
                'tipo' => 'estudiante',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'evidencia_id' => 4,
                'user_id' => 8,
                'comentario' => '',
                'tipo' => 'profesor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'evidencia_id' => 4,
                'user_id' => 9,
                'comentario' => '',
                'tipo' => 'estudiante',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'evidencia_id' => 5,
                'user_id' => 10,
                'comentario' => '',
                'tipo' => 'profesor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'evidencia_id' => 5,
                'user_id' => 11,
                'comentario' => '',
                'tipo' => 'estudiante',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        //DB::table('comentarios')->insert($comentarios);
    }
}
