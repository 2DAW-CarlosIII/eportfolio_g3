<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evidencia>
 */
class EvidenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'estudiante_id' => fake()->numberBetween(1, 11),
            'criterio_evaluacion_id' => fake()->numberBetween(1, 22),
            'url' => fake()->url(),
            'descripcion' => fake()->text(50),
            'estado_validacion' => fake()->randomElement(['pendiente', 'validada', 'rechazada'])
        ];
    }
}
