---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_5b080218a1072bd18abe4afbd5cc7c08 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/exercise" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/exercise"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (201):

```json
{
    "data": [
        {
            "id": 2,
            "name": "Agachamento unilateral",
            "description": "1.Em pé, pernas afastadas uma da outra, alinhadas com a bacia, joelhos ligeiramente fletidos, costas direitas, abdominal contraído, perna de trás apoiada sobre a ponta do pé. Inspirar e ao mesmo tempo descer;\n2.Fletir o joelho da frente mantendo-o alinhado com o calcanhar e aproximar o joelho da perna de trás do chão;\n3.A perna da frente e a coxa de trás devem estar perpendiculares ao chão no final do movimento;\n4.Expirar e ao mesmo tempo voltar à posição inicial empurrando o chão, contraindo sempre o abdominal.",
            "image": "",
            "duration": 4,
            "body_part_id": 3,
            "exercise_type_id": 2,
            "recipe_id": 5,
            "difficulty_id": 2,
            "generation_id": 5,
            "author_id": 10,
            "review": null,
            "created_at": "2019-11-07 03:10:25",
            "updated_at": "2019-11-08 01:35:07",
            "deleted_at": null
        },
        {
            "id": 3,
            "name": "Flexão de Joelhos",
            "description": "Em pé, apoiando as mãos na parede, flexione a perna direita de modo que o calcanhar aproxime-se do glúteo, realize 12 repetições e faça o mesmo o movimento com a perna esquerda. É importante manter o quadril estável e trabalhar somente com a articulação do joelho. Uma forma de aumentar a carga é utilizar caneleiras.",
            "image": "",
            "duration": 1,
            "body_part_id": 3,
            "exercise_type_id": 2,
            "recipe_id": null,
            "difficulty_id": 1,
            "generation_id": 4,
            "author_id": 2,
            "review": null,
            "created_at": "2019-11-07 03:10:25",
            "updated_at": "2019-11-07 03:10:25",
            "deleted_at": null
        },
        {
            "id": 4,
            "name": "Abdominal Invertido",
            "description": "1.Deitar-se de costas em uma esteira ou colchonete de exercícios, com os joelhos dobrados e unidos, as pernas flexionadas em um ângulo de 90º, os braços estendidos ao lado do corpo, as palmas voltadas para o chão e os pés apoiados no solo, como na primeira imagem.\n\n2.Então, contrair o abdômen para levantar os quadris do chão, comprimindo os joelhos contra o tórax conforme a segunda fotografia. O movimento de levar os joelhos em direção ao tórax deve ser realizado pelos quadris e abdômen. Pausar por um instante na parte alta do movimento e retornar ao posicionamento original, tomando cuidado para não arquear a coluna ou removê-la do chão. \n\n3.O exercício não deve ser feitp de maneira rápida e as pernas devem ser abaixadas de maneira lenta e controlada. Além disso, você não deve levantar o pescoço em nenhuma parte da atividade.",
            "image": "",
            "duration": 10,
            "body_part_id": 2,
            "exercise_type_id": 2,
            "recipe_id": 4,
            "difficulty_id": 2,
            "generation_id": 5,
            "author_id": 23,
            "review": null,
            "created_at": "2019-11-08 00:50:36",
            "updated_at": "2019-11-08 00:50:36",
            "deleted_at": null
        },
        {
            "id": 5,
            "name": "Abdominal Clássico",
            "description": "1.Esse certamente é o mais clássico destes exercícios abdominais para fazer em casa. Deitar-se no chão ou em cima de uma esteira ou colchonete. Colocar uma mão em cada lado da cabeça e dobrar os joelhos, mantendo os pés apoiados no chão. Por sinal, os pés devem permanecer firmes no chão durante todo o exercício.\n\n2.Levantar a parte superior do corpo com a força dos músculos abdominais, apontando a cabeça em direção ao teto. Enquanto sobe, exalar o ar e segurar por um segundo. Então, descer, voltando ao posicionamento original, ao mesmo tempo em que inala o ar.\n\n3.Durante o exercício, é importante tomar cuidado para não forçar a coluna. Também é essencial não jogar a cabeça para frente com força.",
            "image": "C:\\xampp\\tmp\\phpDD0E.tmp",
            "duration": 1,
            "body_part_id": 2,
            "exercise_type_id": 4,
            "recipe_id": null,
            "difficulty_id": 3,
            "generation_id": 5,
            "author_id": 8,
            "review": null,
            "created_at": "2019-11-08 02:50:57",
            "updated_at": "2019-11-08 02:50:57",
            "deleted_at": null
        },
        {
            "id": 6,
            "name": "Abdominal upload 2",
            "description": "1.Esse certamente é o mais clássico destes exercícios abdominais para fazer em casa. Deitar-se no chão ou em cima de uma esteira ou colchonete. Colocar uma mão em cada lado da cabeça e dobrar os joelhos, mantendo os pés apoiados no chão. Por sinal, os pés devem permanecer firmes no chão durante todo o exercício.",
            "image": "C:\\xampp\\tmp\\phpB4F6.tmp",
            "duration": 1,
            "body_part_id": 2,
            "exercise_type_id": 4,
            "recipe_id": null,
            "difficulty_id": 3,
            "generation_id": 5,
            "author_id": 8,
            "review": null,
            "created_at": "2019-11-08 03:04:59",
            "updated_at": "2019-11-08 03:04:59",
            "deleted_at": null
        },
        {
            "id": 7,
            "name": "Teste upload image",
            "description": "Deitar-se no chão ou em cima de uma esteira ou colchonete. Colocar uma mão em cada lado da cabeça e dobrar os joelhos, mantendo os pés apoiados no chão. Por sinal, os pés devem permanecer firmes no chão durante todo o exercício.",
            "image": "images\/ENkRReqtdaH0f958nyAB4oRlaoGDiZ0FqXcz3tp6.jpeg",
            "duration": 1,
            "body_part_id": 2,
            "exercise_type_id": 4,
            "recipe_id": null,
            "difficulty_id": 3,
            "generation_id": 5,
            "author_id": 8,
            "review": null,
            "created_at": "2019-11-08 03:07:28",
            "updated_at": "2019-11-14 00:23:25",
            "deleted_at": null
        },
        {
            "id": 8,
            "name": "upload certo",
            "description": "Colocar uma mão em cada lado da cabeça e dobrar os joelhos, mantendo os pés apoiados no chão. Por sinal, os pés devem permanecer firmes no chão durante todo o exercício.",
            "image": "images\/NwFmVDHdIHO10W0OkWZhoxQoqhXYcFaKyvUJC0wn.jpeg",
            "duration": 1,
            "body_part_id": 2,
            "exercise_type_id": 4,
            "recipe_id": null,
            "difficulty_id": 3,
            "generation_id": 5,
            "author_id": 8,
            "review": null,
            "created_at": "2019-11-08 03:10:55",
            "updated_at": "2019-11-08 03:10:55",
            "deleted_at": null
        },
        {
            "id": 9,
            "name": "Prancha Isométrica",
            "description": "edrfghbnjkml,",
            "image": "images\/GduwdAVp4j95CgLr1FHmybxXOAEkuKFzlXHUtHXn.jpeg",
            "duration": 1,
            "body_part_id": 1,
            "exercise_type_id": 1,
            "recipe_id": 4,
            "difficulty_id": 1,
            "generation_id": 1,
            "author_id": 11,
            "review": null,
            "created_at": "2019-11-13 00:09:59",
            "updated_at": "2019-11-13 00:09:59",
            "deleted_at": null
        },
        {
            "id": 10,
            "name": "dghjk",
            "description": "gljkçkçkçkç",
            "image": "images\/MAOBhidaUsZIrmm5xk7d3yWYpcISZT2mKi74vt0E.jpeg",
            "duration": 12,
            "body_part_id": 1,
            "exercise_type_id": 1,
            "recipe_id": 4,
            "difficulty_id": 1,
            "generation_id": 1,
            "author_id": 4,
            "review": null,
            "created_at": "2019-11-13 00:51:22",
            "updated_at": "2019-11-13 00:51:22",
            "deleted_at": null
        },
        {
            "id": 11,
            "name": "Exercicio teste",
            "description": "fjhgjfjfkj",
            "image": "images\/OpaLpUiimW6CNZmCY5toScfcg8u3QYRQqLQISj2T.jpeg",
            "duration": 20,
            "body_part_id": 1,
            "exercise_type_id": 1,
            "recipe_id": null,
            "difficulty_id": 1,
            "generation_id": 1,
            "author_id": 17,
            "review": null,
            "created_at": "2019-11-13 00:58:57",
            "updated_at": "2019-11-14 00:21:48",
            "deleted_at": null
        },
        {
            "id": 12,
            "name": "Flexões",
            "description": "1.Deite-se num tapete sobre a barriga.\r\n2.Coloque as mãos ligeiramente afastadas da largura dos ombros e o tronco reto.\r\n3.Levante o corpo esticando os baços, mantendo a coluna direita e o olhar em frente.\r\n4.Com o corpo apoiado apenas nas mãos e na ponta dos pés, levante e baixe o corpo apenas com a ajuda dos braços.\r\n5.Se estiver difícil, apoie-se com os joelhos no chão mas se estiver fácil, suba a parada e com a ajuda de um step faça flexões alternadas com cada braço, ou seja, faz uma flexão, passa por cima do step e repete do outro lado.",
            "image": "images\/MR8nc7nUjfJfe5P0JMQPD2oSkPEzamEr7ZNkqLjr.jpeg",
            "duration": 2,
            "body_part_id": 1,
            "exercise_type_id": 2,
            "recipe_id": null,
            "difficulty_id": 3,
            "generation_id": 2,
            "author_id": 2,
            "review": null,
            "created_at": "2019-11-13 01:17:47",
            "updated_at": "2019-11-13 01:17:47",
            "deleted_at": null
        },
        {
            "id": 13,
            "name": "teste insert",
            "description": "insert",
            "image": "images\/XpjFMMayOVJnZKzb5rhiWyUj4uIUFGGfz2Wl2Gjw.jpeg",
            "duration": 3,
            "body_part_id": 2,
            "exercise_type_id": 2,
            "recipe_id": 4,
            "difficulty_id": 3,
            "generation_id": 3,
            "author_id": 18,
            "review": null,
            "created_at": "2019-11-14 00:35:48",
            "updated_at": "2019-11-14 00:35:48",
            "deleted_at": null
        },
        {
            "id": 14,
            "name": "teste2000",
            "description": "dwefwefwrf",
            "image": "images\/yhI8M7LoKrsAptPJCunFwDzGS9pyiIUc2U268hSF.jpeg",
            "duration": 3,
            "body_part_id": 3,
            "exercise_type_id": 5,
            "recipe_id": null,
            "difficulty_id": 2,
            "generation_id": 4,
            "author_id": 7,
            "review": null,
            "created_at": "2019-11-14 01:29:47",
            "updated_at": "2019-11-14 01:29:47",
            "deleted_at": null
        }
    ],
    "message": "Lista de exercícios",
    "result": "ok"
}
```

### HTTP Request
`GET api/exercise`


<!-- END_5b080218a1072bd18abe4afbd5cc7c08 -->

<!-- START_8bcdc29f98ac8a1356d3708905f6f283 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/exercise/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/exercise/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/exercise/create`


<!-- END_8bcdc29f98ac8a1356d3708905f6f283 -->

<!-- START_fc27ed4101142f4d0cd07a1d47924feb -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/exercise" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"alias","description":"qui","image":"perspiciatis","duration":"voluptatem","body_part_id":"aut","exercise_type_id":"doloremque","recipe_id":"et","difficulty_id":"repudiandae","generation_id":"natus"}'

```

```javascript
const url = new URL(
    "http://localhost/api/exercise"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "alias",
    "description": "qui",
    "image": "perspiciatis",
    "duration": "voluptatem",
    "body_part_id": "aut",
    "exercise_type_id": "doloremque",
    "recipe_id": "et",
    "difficulty_id": "repudiandae",
    "generation_id": "natus"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/exercise`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | required |  optional  | string max:100 Nome do exercício.
        `description` | required |  optional  | string max:5000  Execução do exercício.
        `image` | required |  optional  | image Imagem do exercício.
        `duration` | required |  optional  | integer max:30 Duração do exercício.
        `body_part_id` | required |  optional  | integer Parte do corpo que o exercício trabalha.
        `exercise_type_id` | required |  optional  | integer Em que tipo de exercício se enquadra.
        `recipe_id` | Receita |  optional  | associada a um exercício.
        `difficulty_id` | required |  optional  | integer Dificuldade de execução do exercício.
        `generation_id` | required |  optional  | integer Geração indicada para o exercício.
    
<!-- END_fc27ed4101142f4d0cd07a1d47924feb -->

<!-- START_eabfe1757d72838505bb945701c06462 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/exercise/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"rerum","description":"ducimus","image":"sit","duration":"unde","body_part_id":"corporis","exercise_type_id":"temporibus","recipe_id":"nihil","difficulty_id":"enim","generation_id":"enim"}'

```

```javascript
const url = new URL(
    "http://localhost/api/exercise/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "rerum",
    "description": "ducimus",
    "image": "sit",
    "duration": "unde",
    "body_part_id": "corporis",
    "exercise_type_id": "temporibus",
    "recipe_id": "nihil",
    "difficulty_id": "enim",
    "generation_id": "enim"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Exercise] 1"
}
```

### HTTP Request
`GET api/exercise/{exercise}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | required |  optional  | string max:100 Nome do exercício.
        `description` | required |  optional  | string max:5000  Execução do exercício.
        `image` | required |  optional  | image Imagem do exercício.
        `duration` | required |  optional  | integer max:30 Duração do exercício.
        `body_part_id` | required |  optional  | integer Parte do corpo que o exercício trabalha.
        `exercise_type_id` | required |  optional  | integer Em que tipo de exercício se enquadra.
        `recipe_id` | Receita |  optional  | associada a um exercício.
        `difficulty_id` | required |  optional  | integer Dificuldade de execução do exercício.
        `generation_id` | required |  optional  | integer Geração indicada para o exercício.
    
<!-- END_eabfe1757d72838505bb945701c06462 -->

<!-- START_0edcaea1d2e49db88cfad509e0ff3edb -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/exercise/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/exercise/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Exercise] 1"
}
```

### HTTP Request
`GET api/exercise/{exercise}/edit`


<!-- END_0edcaea1d2e49db88cfad509e0ff3edb -->

<!-- START_6082c50ebae64bf24c6b6f514813dcdf -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/exercise/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"aliquam","description":"alias","image":"autem","duration":"ex","body_part_id":"eos","exercise_type_id":"ipsa","recipe_id":"aut","difficulty_id":"assumenda","generation_id":"dolorum"}'

```

```javascript
const url = new URL(
    "http://localhost/api/exercise/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "aliquam",
    "description": "alias",
    "image": "autem",
    "duration": "ex",
    "body_part_id": "eos",
    "exercise_type_id": "ipsa",
    "recipe_id": "aut",
    "difficulty_id": "assumenda",
    "generation_id": "dolorum"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/exercise/{exercise}`

`PATCH api/exercise/{exercise}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | required |  optional  | string max:100 Nome do exercício.
        `description` | required |  optional  | string max:5000  Execução do exercício.
        `image` | required |  optional  | image Imagem do exercício.
        `duration` | required |  optional  | integer max:30 Duração do exercício.
        `body_part_id` | required |  optional  | integer Parte do corpo que o exercício trabalha.
        `exercise_type_id` | required |  optional  | integer Em que tipo de exercício se enquadra.
        `recipe_id` | Receita |  optional  | associada a um exercício.
        `difficulty_id` | required |  optional  | integer Dificuldade de execução do exercício.
        `generation_id` | required |  optional  | integer Geração indicada para o exercício.
    
<!-- END_6082c50ebae64bf24c6b6f514813dcdf -->

<!-- START_87dbcd1c042118ce28eb183cb45c4c94 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/exercise/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/exercise/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/exercise/{exercise}`


<!-- END_87dbcd1c042118ce28eb183cb45c4c94 -->

<!-- START_5f6c0f8cee6fd55f42e5e6594b0e9c5d -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/recipe" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/recipe"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (201):

```json
{
    "data": [
        {
            "id": 4,
            "name": "Empada de quinoa",
            "image": "",
            "preparation_mode": "1. Passe a quinoa por água, coloque-a num tacho com água e uma colher de chá de sal e ferva tapado cerca de 15 minutos. 2. Descasque e pique finamente as chalotas e leve-as ao lume com o azeite numa frigideira larga. Junte a abóbora, salpique com o restante sal, um pouco de pimenta e de tomilho e salteie em lume médio a forte durante 10 minutos, mexendo frequentemente. 3. Misture as farinhas com as sementes de linhaça e o sal num robot de cozinha. Adicione o azeite e pressione a função. Pulse duas a três vezes. Junte a água e misture até os ingredientes começarem a ligar. Molde a massa em bola e deixe descansar 20 minutos.4. Adicione os arandos e os espinafres à abóbora, junte a quinoa e envolva bem. Retire do lume e misture as nozes, grosseiramente picadas.5. Pré-aqueça o forno a 180° C, na função calor ventilado com a grelha inferior.6. Estenda 2\/3 da massa e forre uma tarteira de fundo móvel (+\/– 24 cm de diâmetro) com 3 cm de altura.7. Pique o fundo com um garfo e recheie com o preparado de quinoa.8. Estenda a restante massa num círculo com o diâmetro da tarte e coloque-a sobre o recheio, ligando bem os bordos. Com um corta-massas pequeno faça recortes na superfície da massa, disponha-os sobre a tarte e “cole-os” com um pincel molhado. Leve ao forno durante 45 minutos.9. Coloque o tomate num tabuleiro de forno, regue-o com o azeite, salpique com o alho em pó e um pouco de tomilho e leve ao forno nos últimos 15 minutos. 10. Sirva a tarte com o tomate assado.",
            "ingredients": "200 g farinha de trigo integral, 100 g farinha de trigo tipo 55, 2 c. chá sementes de linhaça moídas, 1 c. chá sal, 6 c. sopa azeite, 1 dl água, 300 g tomate mini com rama, 1 c. sopa azeite, qb alho em pó, qb tomilho, 100 g quinoa 2,5 dl água, 2 c. chá sal, 2 chalotas, 3 c. sopa azeite, 300 g abóbora limpa em cubos, qb pimenta de moinho, qb tomilho, 50 g arandos desidratados, 170 g espinafres em folha, 30 g miolo de noz",
            "portion": 6,
            "duration": 90,
            "gluten_free": 0,
            "lactose_free": 1,
            "vegan": 1,
            "vegetariano": 0,
            "paleo": 0,
            "difficulty_id": 3,
            "review": null,
            "created_at": "2019-11-07 02:47:04",
            "updated_at": "2019-11-08 01:38:30",
            "deleted_at": null
        },
        {
            "id": 5,
            "name": "Almôndegas de courgette",
            "image": "",
            "preparation_mode": "1. Num robot de cozinha, coloque os dentes de alho, a cebola e a courgette cortadas em pedaços, e uma colher de sopa de azeite. Pique até obter uma mistura grossa.2. Ponha a mistura anterior num pano e esprema bem, de forma a extrair toda a água da courgette.3. Numa taça, adicione o requeijão, o pão ralado, o ovo, o manjericão e o parmesão. Misture bem até todos os ingredientes estarem combinados. Junte a mistura com a courgette e envolva bem. 4. Forme bolas com as mãos. Para melhor trabalhar a mistura, pode untar as mãos com azeite.5. Aqueça o restante azeite numa frigideira e frite as bolas, durante 5 minutos. Aqueça o molho de tomate, tempere com 1 colher de chá sal e deixe apurar em lume brando durante pelo menos 10 minutos. 6. Num tacho, cozinhe a massa conforme as instruções da embalagem, com o restante sal. Cerca de 3 minutos antes de a massa estar pronta, adicione as ervilhas e deixe cozinhar. Escorra.7. Sirva as almôndegas com a massa e as ervilhas. Decore com folhas frescas de manjericão.",
            "ingredients": "2 dentes de alho, 1 cebola, 600 g courgette, 2 c. de sopa azeite, 1 requeijão Pingo Doce, 1 chávena de pão fresco integral ralado, 1 ovo S, 2 c. de sopa manjericão fresco picado, 2 c. de sopa queijo parmesão ralado, 1 frasco de molho de tomate e basílico, 1 c. de chá + 1 c. de café sal, 100 g massa fusilli integral Pingo Doce, 150 g ervilhas, qb manjericão fresco",
            "portion": 6,
            "duration": 30,
            "gluten_free": 0,
            "lactose_free": 0,
            "vegan": 0,
            "vegetariano": 1,
            "paleo": 0,
            "difficulty_id": 1,
            "review": null,
            "created_at": "2019-11-07 02:47:05",
            "updated_at": "2019-11-07 02:47:05",
            "deleted_at": null
        },
        {
            "id": 6,
            "name": "Salada morna de grão com atum",
            "image": "",
            "preparation_mode": "1. Coloque os ovos num tacho com água e o sal.\n2. Escorra o grão num coador e passe-o por água. Adicione aos ovos e deixe ferver durante 10 minutos.\n3. Coloque os brócolos lavados num recipiente que possa ir ao microondas.\n4. Tape-o e cozinhe durante 5 minutos na potência máxima, mexendo a meio da confecção.\n5. Descasque e pique a cebola finamente.\n6. Lave os pimentos, retire as sementes e corte-os em tiras. Escorra o atum, desfaça-o em pedaços e misture-o com a cebola picada e as tiras de pimento.\n7. Adicione o grão e os brócolos, tempere com pimenta, regue com o azeite e o vinagre e adicione a salsa.\n8. Misture e enfeite com os ovos cozidos cortados em gomos ou às rodelas.\n9. Sirva de imediato.",
            "ingredients": "2 ovos M\n1 c. de sobremesa sal\n850 g grão cozido\n250 g brócolos\n70 g cebola roxa\n100 g pimentos baby\n2 latas atum em azeite\nq.b. pimenta moída\n2 c. de sopa azeite\n2 c. de sopa vinagre\n2 c. de sopa salsa picada",
            "portion": 4,
            "duration": 30,
            "gluten_free": 0,
            "lactose_free": 0,
            "vegan": 0,
            "vegetariano": 23,
            "paleo": 0,
            "difficulty_id": 1,
            "review": null,
            "created_at": "2019-11-08 01:08:20",
            "updated_at": "2019-11-08 01:08:20",
            "deleted_at": null
        },
        {
            "id": 7,
            "name": "Receita teste upload",
            "image": "images\/gdVjbF5U5BlHtJeUeECgJzRsnaxvSDGUHKnZ546n.jpeg",
            "preparation_mode": "dwefwef",
            "ingredients": "efwefwrf4",
            "portion": 4,
            "duration": 3,
            "gluten_free": 1,
            "lactose_free": 1,
            "vegan": 1,
            "vegetariano": 1,
            "paleo": 1,
            "difficulty_id": 1,
            "review": null,
            "created_at": "2019-11-13 02:10:30",
            "updated_at": "2019-11-14 00:31:19",
            "deleted_at": null
        },
        {
            "id": 8,
            "name": "wertg",
            "image": "images\/d1oi0aKpAubGsbWJ30Gac0b1hTyayi3eIL86Vypg.jpeg",
            "preparation_mode": "dew4rftgrtgbrgferfer",
            "ingredients": "rgergtgerg",
            "portion": 2,
            "duration": 3,
            "gluten_free": 0,
            "lactose_free": 0,
            "vegan": 1,
            "vegetariano": 1,
            "paleo": 1,
            "difficulty_id": 1,
            "review": null,
            "created_at": "2019-11-13 14:39:28",
            "updated_at": "2019-11-13 14:39:28",
            "deleted_at": null
        }
    ],
    "message": "Lista de receitas",
    "result": "ok"
}
```

### HTTP Request
`GET api/recipe`


<!-- END_5f6c0f8cee6fd55f42e5e6594b0e9c5d -->

<!-- START_3bac276824589d6d581eedd5ad145da6 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/recipe/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/recipe/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/recipe/create`


<!-- END_3bac276824589d6d581eedd5ad145da6 -->

<!-- START_0e78ae66932e9ae9735855c0cd24320f -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/recipe" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"ex","image":"animi","preparation_mode":"ratione","ingredients":"laborum","portion":"pariatur","duration":"culpa","difficulty_id":"labore"}'

```

```javascript
const url = new URL(
    "http://localhost/api/recipe"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "ex",
    "image": "animi",
    "preparation_mode": "ratione",
    "ingredients": "laborum",
    "portion": "pariatur",
    "duration": "culpa",
    "difficulty_id": "labore"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/recipe`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | required |  optional  | string max:100 Nome da receita.
        `image` | required |  optional  | image Imagem da receita.
        `preparation_mode` | required |  optional  | string max:5000 Modo de preparação da receita.
        `ingredients` | required |  optional  | string max:5000 Ingredientes da receita.
        `portion` | required |  optional  | integer Número de porções da receita.
        `duration` | required |  optional  | integer Duração da receita.
        `difficulty_id` | required |  optional  | integer Nível dedificuldade da receita.
    
<!-- END_0e78ae66932e9ae9735855c0cd24320f -->

<!-- START_bb021d5e9552cbcb4ba82bc4d8678c36 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/recipe/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"et","image":"et","preparation_mode":"neque","ingredients":"ullam","portion":"esse","duration":"qui","difficulty_id":"consequuntur"}'

```

```javascript
const url = new URL(
    "http://localhost/api/recipe/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "et",
    "image": "et",
    "preparation_mode": "neque",
    "ingredients": "ullam",
    "portion": "esse",
    "duration": "qui",
    "difficulty_id": "consequuntur"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Recipe] 1"
}
```

### HTTP Request
`GET api/recipe/{recipe}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | required |  optional  | string max:100 Nome da receita.
        `image` | required |  optional  | image Imagem da receita.
        `preparation_mode` | required |  optional  | string max:5000 Modo de preparação da receita.
        `ingredients` | required |  optional  | string max:5000 Ingredientes da receita.
        `portion` | required |  optional  | integer Número de porções da receita.
        `duration` | required |  optional  | integer Duração da receita.
        `difficulty_id` | required |  optional  | integer Nível dedificuldade da receita.
    
<!-- END_bb021d5e9552cbcb4ba82bc4d8678c36 -->

<!-- START_4675f9450133664fd286029c56654815 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/recipe/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/recipe/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Recipe] 1"
}
```

### HTTP Request
`GET api/recipe/{recipe}/edit`


<!-- END_4675f9450133664fd286029c56654815 -->

<!-- START_852963192fed58de08ad3134ce91d339 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/recipe/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"excepturi","image":"enim","preparation_mode":"temporibus","ingredients":"voluptatum","portion":"saepe","duration":"vel","difficulty_id":"aspernatur"}'

```

```javascript
const url = new URL(
    "http://localhost/api/recipe/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "excepturi",
    "image": "enim",
    "preparation_mode": "temporibus",
    "ingredients": "voluptatum",
    "portion": "saepe",
    "duration": "vel",
    "difficulty_id": "aspernatur"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/recipe/{recipe}`

`PATCH api/recipe/{recipe}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | required |  optional  | string max:100 Nome da receita.
        `image` | required |  optional  | image Imagem da receita.
        `preparation_mode` | required |  optional  | string max:5000 Modo de preparação da receita.
        `ingredients` | required |  optional  | string max:5000 Ingredientes da receita.
        `portion` | required |  optional  | integer Número de porções da receita.
        `duration` | required |  optional  | integer Duração da receita.
        `difficulty_id` | required |  optional  | integer Nível dedificuldade da receita.
    
<!-- END_852963192fed58de08ad3134ce91d339 -->

<!-- START_4e7b7d05649205b488c9b6310fae75ff -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/recipe/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/recipe/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/recipe/{recipe}`


<!-- END_4e7b7d05649205b488c9b6310fae75ff -->

<!-- START_eeecf284f5ecfc18a1743a4e8b858e82 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/body" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/body"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (201):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Braços",
            "image": "",
            "created_at": "2019-11-07 02:36:47",
            "updated_at": "2019-11-07 02:36:47",
            "deleted_at": null
        },
        {
            "id": 2,
            "name": "Abdómen",
            "image": "",
            "created_at": "2019-11-07 02:36:47",
            "updated_at": "2019-11-07 02:36:47",
            "deleted_at": null
        },
        {
            "id": 3,
            "name": "Pernas",
            "image": "",
            "created_at": "2019-11-07 02:36:47",
            "updated_at": "2019-11-07 02:36:47",
            "deleted_at": null
        },
        {
            "id": 4,
            "name": "Biceps",
            "image": "C:\\xampp\\tmp\\phpD212.tmp",
            "created_at": "2019-11-07 18:30:39",
            "updated_at": "2019-11-07 18:30:39",
            "deleted_at": null
        },
        {
            "id": 6,
            "name": "Pescoço",
            "image": "",
            "created_at": "2019-11-07 18:35:46",
            "updated_at": "2019-11-07 18:35:46",
            "deleted_at": null
        },
        {
            "id": 7,
            "name": "Pés",
            "image": "",
            "created_at": "2019-11-07 18:48:59",
            "updated_at": "2019-11-07 18:48:59",
            "deleted_at": null
        },
        {
            "id": 8,
            "name": "Glúteos",
            "image": "",
            "created_at": "2019-11-07 18:51:35",
            "updated_at": "2019-11-08 01:31:04",
            "deleted_at": null
        },
        {
            "id": 11,
            "name": "Costas",
            "image": "images\/Yad3Y27BiHbGqVrka62GPXYUH5YEO2Q0DvMVCdcW.jpeg",
            "created_at": "2019-11-08 03:13:32",
            "updated_at": "2019-11-14 00:51:38",
            "deleted_at": null
        },
        {
            "id": 12,
            "name": "Peitorais",
            "image": "images\/nEGosYElrwyZzXgtbPfxwjuhuDPWh71JElA9lZt2.jpeg",
            "created_at": "2019-11-13 10:44:25",
            "updated_at": "2019-11-13 10:44:25",
            "deleted_at": null
        }
    ],
    "message": "Lista de partes do corpo",
    "result": "ok"
}
```

### HTTP Request
`GET api/body`


<!-- END_eeecf284f5ecfc18a1743a4e8b858e82 -->

<!-- START_b0adf92a37adeed99fd49b41c18915cb -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/body/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/body/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/body/create`


<!-- END_b0adf92a37adeed99fd49b41c18915cb -->

<!-- START_fa9d08c32da16c548212f3c90b6d1233 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/body" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"ut","image":"sapiente"}'

```

```javascript
const url = new URL(
    "http://localhost/api/body"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "ut",
    "image": "sapiente"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/body`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | required |  optional  | string max:100 Nome da parte do corpo.
        `image` | required |  optional  | image Imagem da parte do corpo.
    
<!-- END_fa9d08c32da16c548212f3c90b6d1233 -->

<!-- START_e878bfd583a7cbd9deab62ded488baeb -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/body/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"est","image":"cum"}'

```

```javascript
const url = new URL(
    "http://localhost/api/body/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "est",
    "image": "cum"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "name": "Braços",
    "image": "",
    "created_at": "2019-11-07 02:36:47",
    "updated_at": "2019-11-07 02:36:47",
    "deleted_at": null
}
```

### HTTP Request
`GET api/body/{body}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | required |  optional  | string max:100 Nome da parte do corpo.
        `image` | required |  optional  | image Imagem da parte do corpo.
    
<!-- END_e878bfd583a7cbd9deab62ded488baeb -->

<!-- START_9aa42e2e35210b92ba5c4ec0456550ef -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/body/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/body/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/body/{body}/edit`


<!-- END_9aa42e2e35210b92ba5c4ec0456550ef -->

<!-- START_5b6851982572f8480aeb6a7a3bc1c5ba -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/body/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"dicta","image":"veniam"}'

```

```javascript
const url = new URL(
    "http://localhost/api/body/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "dicta",
    "image": "veniam"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/body/{body}`

`PATCH api/body/{body}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | required |  optional  | string max:100 Nome da parte do corpo.
        `image` | required |  optional  | image Imagem da parte do corpo.
    
<!-- END_5b6851982572f8480aeb6a7a3bc1c5ba -->

<!-- START_a92b672fbba89a5b9f5f6167a2603c5b -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/body/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/body/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/body/{body}`


<!-- END_a92b672fbba89a5b9f5f6167a2603c5b -->

<!-- START_0af640bf746a8d0ece463bfe045f6d69 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/type" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/type"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (201):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Cárdio",
            "image": null,
            "created_at": "2019-11-07 02:37:01",
            "updated_at": "2019-11-08 01:40:02",
            "deleted_at": null
        },
        {
            "id": 2,
            "name": "Resistência",
            "image": null,
            "created_at": "2019-11-07 02:37:01",
            "updated_at": "2019-11-07 02:37:01",
            "deleted_at": null
        },
        {
            "id": 3,
            "name": "Velocidade",
            "image": null,
            "created_at": "2019-11-07 02:37:01",
            "updated_at": "2019-11-07 02:37:01",
            "deleted_at": null
        },
        {
            "id": 4,
            "name": "Musculação",
            "image": null,
            "created_at": "2019-11-08 01:19:27",
            "updated_at": "2019-11-08 01:19:27",
            "deleted_at": null
        },
        {
            "id": 5,
            "name": "Equilíbrio",
            "image": "images\/W46kuyA2wSrky6GSDy3IC62pV4Lmw7LomECRqZzh.jpeg",
            "created_at": "2019-11-13 10:29:03",
            "updated_at": "2019-11-14 00:58:13",
            "deleted_at": null
        }
    ],
    "message": "Lista de tipos de exercícios",
    "result": "ok"
}
```

### HTTP Request
`GET api/type`


<!-- END_0af640bf746a8d0ece463bfe045f6d69 -->

<!-- START_717443ee96025d80ca4e3d1f7487306c -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/type/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/type/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/type/create`


<!-- END_717443ee96025d80ca4e3d1f7487306c -->

<!-- START_7f4e8a42a735206ef633cee0caa925d4 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/type" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"omnis","image":"placeat"}'

```

```javascript
const url = new URL(
    "http://localhost/api/type"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "omnis",
    "image": "placeat"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/type`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | required |  optional  | string max:100 Nome da secção do tipo de exercício.
        `image` | required |  optional  | image Imagem ou icone do tipo de exercício.
    
<!-- END_7f4e8a42a735206ef633cee0caa925d4 -->

<!-- START_3d3401e24c253175ee60e0fb9c5ab6ff -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/type/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"unde","image":"facilis"}'

```

```javascript
const url = new URL(
    "http://localhost/api/type/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "unde",
    "image": "facilis"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "name": "Cárdio",
    "image": null,
    "created_at": "2019-11-07 02:37:01",
    "updated_at": "2019-11-08 01:40:02",
    "deleted_at": null
}
```

### HTTP Request
`GET api/type/{type}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | required |  optional  | string max:100 Nome da secção do tipo de exercício.
        `image` | required |  optional  | image Imagem ou icone do tipo de exercício.
    
<!-- END_3d3401e24c253175ee60e0fb9c5ab6ff -->

<!-- START_34ca5153fcecaf855594c9beb0224efb -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/type/1/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/type/1/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`GET api/type/{type}/edit`


<!-- END_34ca5153fcecaf855594c9beb0224efb -->

<!-- START_b2221839651de8ab2eaabd8c36b87ee0 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/type/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"officia","image":"quis"}'

```

```javascript
const url = new URL(
    "http://localhost/api/type/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "officia",
    "image": "quis"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/type/{type}`

`PATCH api/type/{type}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | required |  optional  | string max:100 Nome da secção do tipo de exercício.
        `image` | required |  optional  | image Imagem ou icone do tipo de exercício.
    
<!-- END_b2221839651de8ab2eaabd8c36b87ee0 -->

<!-- START_a86ca4f7b90338b53c8794f04502424f -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/type/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/type/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/type/{type}`


<!-- END_a86ca4f7b90338b53c8794f04502424f -->


