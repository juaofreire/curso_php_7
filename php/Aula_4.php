<?php

echo '14 - Definições e Formatos de Arrays no PHP';
echo '<br><br><br>';

$cars_old = array(1, 'Carlos', 12.2);
echo 'Existe duas formas de criar um array, a forma antiga: $nome = array();';
echo '<br>';

var_dump($cars_old);
echo '<br><br>';

$cars_new = [5, 'Lucas', 35.5];
echo 'Já a forma mais atual seria: $nome = [];';
echo '<br>';

var_dump($cars_new[1]);
echo '<br><br>';

$car = [
    'cor' => 'Azul',
    'portas' => 2,
    'ano' => 2013,
    'marca' => 'Uno'
];
echo 'Também é possivel criar arrays compostos, sendo assim, as dados no array possuem dados.';
echo '<br>';

var_dump($car);
echo '<br><br>';

$cars = [
    'Mercedes' => [
        'cor' => 'Preto',
        'motor' => 5.2,
        'nome' => 'Mercedes',
    ],
    'Ford' => [
        'cor' => 'Cinza',
        'motor' => 3.2,
        'nome' => 'Ford',
    ],
    'Ferrari' => [
        'cor' => 'Vermelho',
        'motor' => 10,
        'nome' => 'Ferrari',
    ],
];
echo 'Além disso é possivel a criação de arrays multiplos, onde existem arrays dentro de arrays.';
echo '<br><br><br>';

/*
echo '<pre>';
var_dump($cars);
echo '</pre>';
echo '<br>';

echo $cars['Ford']['nome'];
$cars['Ford']['nome'] = 'Novo Ford';
echo '<br>';
echo $cars['Ford']['nome'];
echo '<br><br><br>';
*/


echo '15 - Manipulação de Arrays no PHP';
echo '<br><br><br>';

echo 'Uma função de manipulação de arrays é o compact, com ele podemos compactar arrays em um unico array multiplo.';
echo '<br>';

$name = 'Carlos';
$company = 'EspecializaTi';
$year = 2018;

/*
$infoCompany = [
    $name,
    $company,
    $year
]
*/

$infoCompany = compact('name', 'company', 'year');
var_dump($infoCompany);
echo '<br><br>';

echo 'Essa variavel é um array? ';
var_dump(is_array($name));
echo 'E essa? ';
var_dump(is_array($infoCompany));
echo '<br><br>';

echo 'Existe "Carlos" no array? ';
var_dump(in_array('Carlos',$infoCompany));
echo '<br><br><br>';


echo '16 - Continuação de Manipulação de Arrays no PHP';
echo '<br><br><br>';

$infoCompanyTwo = [
    'curso' =>  ['PHP', 'JS', 'Laravel', 'Vue JS'],
    'total' =>  ['26']
];

echo 'Uma função para listar os nomes dos arrays dentro de um array multiplo é o array_keys:';
echo '<br>';
var_dump(array_keys($infoCompany));
echo '<br><br>';

echo 'Uma função para listar os conteúdos dos arrays dentro de um array multiplo é o array_keys:';
echo '<br>';
var_dump(array_values($infoCompany));
echo '<br><br>';

echo 'Uma função para contar o número arrays dentro de um array multiplo é o array_keys:';
echo '<br>';
var_dump(count($infoCompany));
echo '<br><br>';

echo 'Uma função para concatenar dois arrays multiplos é o array_merge:';
echo '<br>';
$infoCompany = array_merge($infoCompany, $infoCompanyTwo);


echo '<br>';
var_dump($infoCompany);
echo '<br><br><br>';

/*
echo '<pre>';
var_dump($infoCompany);
echo '</pre>';
echo '<br>';
*/


echo '17 - Continuação de Manipulação de Arrays no PHP';
echo '<br><br><br>';

echo 'Temos por exemplo essa lista de carrinho de compras:<br>';
$cart = ['Arroz','Sabão','Feijão','Balinhas'];
var_dump($cart);

echo '<hr>';

echo 'Podemos usar por exemplo a função array_pop para retirar o ultimo conteudo dela:<br>';
array_pop($cart);
var_dump($cart);

echo '<hr>';

echo 'Outra função que podemos utilizar é a funcão array_shift para retirar primeiro conteudo:<br>';
array_shift($cart);
var_dump($cart);

echo '<hr>';

echo 'Outra função seria a unset, utilizada para esvaziar uma variavel:<br>';
//unset($cart);
unset($cart[0]);
var_dump($cart);

echo '<hr>';

echo 'Ao contrario da função array_pop, temos a função array_push para adicionar um conteudo no fim do array:<br>';
array_push($cart, 'Tapete');
array_push($cart, 'Rodo');
var_dump($cart);

echo '<hr>';

echo 'Já ao contrario da função array_shift, temos a função array_unshift para adicionar um conteudo no inicio do array:<br>';
array_unshift($cart, 'Microondas');
array_unshift($cart, 'Tapete');
var_dump($cart);

echo '<hr>';

echo 'Para evitar duplicidades em um array ou até mesmo o limpar de conteudos repetidos utilizamos array_unique:<br>';
$cart = array_unique($cart);
var_dump($cart);
echo '<br><br><br>';


echo '18 - Continuação de Manipulação de Arrays no PHP';
echo '<br><br><br>';

$cart_new = [
    0 => 'Macarrão',
    1 => 'Feijão',
    2 => 'Arroz',
    3 => 'Batata'
];

echo 'Novamente temos como exemplo um carrinho de compras:<br>';
var_dump($cart_new);

echo '<hr>';

echo 'Com a função arsort pode-se odernar de forma decrescente os nomes dos produtos:<br>';
arsort($cart_new);
var_dump($cart_new);

echo '<hr>';

echo 'Já com a função asort pode-se odernar de forma crescente os nomes dos produtos:<br>';
asort($cart_new);
var_dump($cart_new);

echo '<hr>';

echo 'Para finalizar podemos re-ordenar os indices dos produtos para ficarem de ordem crescente:<br>';
sort($cart_new);
var_dump($cart_new);
echo '<br><br><br>';


echo '19 - Continuação de Manipulação de Arrays no PHP';
echo '<br><br><br>';

echo 'Neste array temos como exemplo uma lista de idades:<br>';
$ages = [12, 14, 18, 20, 44, 50, 98, 78, 56];
var_dump($ages);
echo '<br><br>';

//echo $ages[count($ages-1)];
echo 'Podemos então usar a função end(), para imprimir o ultimo numero da lista de idades: ';
echo end ($ages);

echo '<hr>';

$agesFiltered = array_filter($ages, function($age){
    return $age >=18;
});

echo 'Utilizando a função array_filter e a combinando com uma função criada, podemos filtrar essas idades:<br>';
var_dump($agesFiltered);

echo '<hr>';

$names_new = ['Carlos', 'EspecializaTi', 'Company'];

/*
$names_new[0] = strtoupper($names_new[0]);
$names_new[1] = strtoupper($names_new[1]);
$names_new[2] = strtoupper($names_new[2]);
*/

$names_new = array_map(function($name){
    return strtoupper($name);
}, $names_new);

/*
$names_new = array_map('applyToupper', $names_new);

function applyToupper($value)
{
    return strtoupper($value)
}
*/

echo 'Utilizando a função array_map podemos alterar os conteudos do array com ajuda de mais uma função:<br>';
var_dump($names_new);

?>