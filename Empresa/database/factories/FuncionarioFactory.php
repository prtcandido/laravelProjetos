<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Funcionario>
 */
class FuncionarioFactory extends Factory
{
    public function definition()
    {
        return [
            'nome' => fake()->name,
            'endereco' => 'rua x,44',
            'dataNasc' => now(),
            'departamento_id' => 1,
        ];
    }
}
