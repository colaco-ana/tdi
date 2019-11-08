<?php

use Illuminate\Database\Seeder;

class GenerationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Generation::create([
            'name' => 'Criança',
        ]);

        \App\Generation::create([
            'name' => 'Adolescente',
        ]);

        \App\Generation::create([
            'name' => 'Adulto',
        ]);

        \App\Generation::create([
            'name' => 'Idoso',
        ]);

        \App\Generation::create([
            'name' => 'Geral',
        ]);
    }
}
