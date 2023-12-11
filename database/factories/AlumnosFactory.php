<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumnos>
 */
class AlumnosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tipoA = ['A','T','F'];
        $a = array_rand($tipoA);

        $userIds = Curso::pluck('id')->toArray();
        $idCurso = array_rand($userIds);

        return [
            'name' => fake()->name(),
            'asistencia' => $tipoA[$a],
            'curso_id' => $userIds[$idCurso]

        ];
    }
}
