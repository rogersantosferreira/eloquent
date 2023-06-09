<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(10)->create();
        \App\Models\Aluno::factory(10)->create();
        \App\Models\Telefone::factory(10)->create();
        \App\Models\Livro::factory(100)->create();
        \App\Models\Emprestimo::factory(10)->create();
    }
}
