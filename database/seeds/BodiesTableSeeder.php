<?php

use Illuminate\Database\Seeder;

class BodiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Body::create([
            'name' => 'Braços',
        ]);

        \App\Body::create([
            'name' => 'Abdómen',
        ]);

        \App\Body::create([
            'name' => 'Pernas',
        ]);
    }
}
