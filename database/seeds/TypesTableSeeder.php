<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Type::create([
            'name' => 'Cárdio',
        ]);

        \App\Type::create([
            'name' => 'Resistência',
        ]);

        \App\Type::create([
            'name' => 'Velocidade',
        ]);
    }
}
