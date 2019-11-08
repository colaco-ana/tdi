<?php

use Illuminate\Database\Seeder;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Recipe::create([
            'name' => 'Empada de quinoa',
            'preparation_mode' => '1. Passe a quinoa por água, coloque-a num tacho com água e uma colher de chá de sal e ferva tapado cerca de 15 minutos. 2. Descasque e pique finamente as chalotas e leve-as ao lume com o azeite numa frigideira larga. Junte a abóbora, salpique com o restante sal, um pouco de pimenta e de tomilho e salteie em lume médio a forte durante 10 minutos, mexendo frequentemente. 3. Misture as farinhas com as sementes de linhaça e o sal num robot de cozinha. Adicione o azeite e pressione a função. Pulse duas a três vezes. Junte a água e misture até os ingredientes começarem a ligar. Molde a massa em bola e deixe descansar 20 minutos.4. Adicione os arandos e os espinafres à abóbora, junte a quinoa e envolva bem. Retire do lume e misture as nozes, grosseiramente picadas.5. Pré-aqueça o forno a 180° C, na função calor ventilado com a grelha inferior.6. Estenda 2/3 da massa e forre uma tarteira de fundo móvel (+/– 24 cm de diâmetro) com 3 cm de altura.7. Pique o fundo com um garfo e recheie com o preparado de quinoa.8. Estenda a restante massa num círculo com o diâmetro da tarte e coloque-a sobre o recheio, ligando bem os bordos. Com um corta-massas pequeno faça recortes na superfície da massa, disponha-os sobre a tarte e “cole-os” com um pincel molhado. Leve ao forno durante 45 minutos.9. Coloque o tomate num tabuleiro de forno, regue-o com o azeite, salpique com o alho em pó e um pouco de tomilho e leve ao forno nos últimos 15 minutos. 10. Sirva a tarte com o tomate assado.',
            'ingredients' => '200 g farinha de trigo integral, 100 g farinha de trigo tipo 55, 2 c. chá sementes de linhaça moídas, 1 c. chá sal, 6 c. sopa azeite, 1 dl água, 300 g tomate mini com rama, 1 c. sopa azeite, qb alho em pó, qb tomilho, 100 g quinoa 2,5 dl água, 2 c. chá sal, 2 chalotas, 3 c. sopa azeite, 300 g abóbora limpa em cubos, qb pimenta de moinho, qb tomilho, 50 g arandos desidratados, 170 g espinafres em folha, 30 g miolo de noz',
            'portion' => 6,
            'duration' => 90,
            'gluten_free' => false,
            'lactose_free' => true,
            'vegan' => true,
            'vegetariano' => false,
            'paleo' => false,
            'difficulty_id' => 3,
        ]);

        \App\Recipe::create([
            'name' => 'Almôndegas de courgette',
            'preparation_mode' => '1. Num robot de cozinha, coloque os dentes de alho, a cebola e a courgette cortadas em pedaços, e uma colher de sopa de azeite. Pique até obter uma mistura grossa.2. Ponha a mistura anterior num pano e esprema bem, de forma a extrair toda a água da courgette.3. Numa taça, adicione o requeijão, o pão ralado, o ovo, o manjericão e o parmesão. Misture bem até todos os ingredientes estarem combinados. Junte a mistura com a courgette e envolva bem. 4. Forme bolas com as mãos. Para melhor trabalhar a mistura, pode untar as mãos com azeite.5. Aqueça o restante azeite numa frigideira e frite as bolas, durante 5 minutos. Aqueça o molho de tomate, tempere com 1 colher de chá sal e deixe apurar em lume brando durante pelo menos 10 minutos. 6. Num tacho, cozinhe a massa conforme as instruções da embalagem, com o restante sal. Cerca de 3 minutos antes de a massa estar pronta, adicione as ervilhas e deixe cozinhar. Escorra.7. Sirva as almôndegas com a massa e as ervilhas. Decore com folhas frescas de manjericão.',
            'ingredients' => '2 dentes de alho, 1 cebola, 600 g courgette, 2 c. de sopa azeite, 1 requeijão Pingo Doce, 1 chávena de pão fresco integral ralado, 1 ovo S, 2 c. de sopa manjericão fresco picado, 2 c. de sopa queijo parmesão ralado, 1 frasco de molho de tomate e basílico, 1 c. de chá + 1 c. de café sal, 100 g massa fusilli integral Pingo Doce, 150 g ervilhas, qb manjericão fresco',
            'portion' => 6,
            'duration' => 30,
            'gluten_free' => false,
            'lactose_free' => false,
            'vegan' => false,
            'vegetariano' => true,
            'paleo' => false,
            'difficulty_id' => 1,
        ]);
    }
}
