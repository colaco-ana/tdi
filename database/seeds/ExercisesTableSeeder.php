<?php

use Illuminate\Database\Seeder;

class ExercisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Exercise::create([
            'name' => 'Agachamento unilateral',
            'description' => '1.Em pé, pernas afastadas uma da outra, alinhadas com a bacia, joelhos ligeiramente fletidos, costas direitas, abdominal contraído, perna de trás apoiada sobre a ponta do pé. Inspirar e ao mesmo tempo descer;
2.Fletir o joelho da frente mantendo-o alinhado com o calcanhar e aproximar o joelho da perna de trás do chão;
3.A perna da frente e a coxa de trás devem estar perpendiculares ao chão no final do movimento;
4.Expirar e ao mesmo tempo voltar à posição inicial empurrando o chão, contraindo sempre o abdominal.',
            'image' => 'images/agachamento_unilateral.jpg',
            'duration' => 4,
            'body_part_id' => 3,
            'exercise_type_id' => 2,
            'recipe_id' => 5,
            'difficulty_id' => 2,
            'generation_id' => 5,
            'author_id' => 6,
        ]);

        \App\Exercise::create([
            'name' => 'Flexão de Joelhos',
            'description' => 'Em pé, apoiando as mãos na parede, flexione a perna direita de modo que o calcanhar aproxime-se do glúteo, realize 12 repetições e faça o mesmo o movimento com a perna esquerda. É importante manter o quadril estável e trabalhar somente com a articulação do joelho. Uma forma de aumentar a carga é utilizar caneleiras.',
            'image' => 'images/agachamento_unilateral.jpg',
            'duration' => 1,
            'body_part_id' => 3,
            'exercise_type_id' => 2,
            'difficulty_id' => 1,
            'generation_id' => 4,
            'author_id' => 2,
        ]);
    }
}
