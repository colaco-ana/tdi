<?php

use Illuminate\Database\Seeder;

class DifficultiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Difficulty::create([
            'name' => 'Baixa',
        ]);

        \App\Difficulty::create([
            'name' => 'Intermédia',
        ]);

        \App\Difficulty::create([
            'name' => 'Alta',
        ]);
    }
}
