<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Departamento::create(['nome'=>'RH']);

        \App\Models\Departamento::factory(3)->create();
        
        \App\Models\Funcionario::create(['nome'=>'Joao','endereco'=>'rua Y,22','dataNasc'=>'1990-10-19','departamento_id'=>2]);

        \App\Models\Funcionario::create(['nome'=>'Maria','endereco'=>'rua Y,33','dataNasc'=>'1993-11-09','departamento_id'=>3]);

        \App\Models\Funcionario::factory(5)->create();

        \App\Models\Produto::create(['descricao'=>'Parafuso']);
        \App\Models\Produto::create(['descricao'=>'Prego']);
        \App\Models\Produto::create(['descricao'=>'Porca']);
    }
}
