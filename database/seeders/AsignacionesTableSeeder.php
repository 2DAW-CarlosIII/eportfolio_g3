<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AsigancionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $asignaciones = [
            [
                'evidencia_id' => 1, // ID de evidencia
                'revisor_id' => 2,    // ID del revisor
                'asignado_por_id' => 3, // ID del usuario que asignó
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'evidencia_id' => 2,
                'revisor_id' => 4,
                'asignado_por_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'evidencia_id' => 3,
                'revisor_id' => 6,
                'asignado_por_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'evidencia_id' => 4,
                'revisor_id' => 8,
                'asignado_por_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'evidencia_id' => 5,
                'revisor_id' => 10,
                'asignado_por_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'evidencia_id' => 6,
                'revisor_id' => 12,
                'asignado_por_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'evidencia_id' => 7,
                'revisor_id' => 14,
                'asignado_por_id' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'evidencia_id' => 8,
                'revisor_id' => 16,
                'asignado_por_id' => 17,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'evidencia_id' => 9,
                'revisor_id' => 18,
                'asignado_por_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'evidencia_id' => 10,
                'revisor_id' => 20,
                'asignado_por_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

    }
}
