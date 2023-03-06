<?php

echo '10 - Tipos de impressão com PHP 7';
echo '<br><br><br>';

echo 'Função echo gera um print na tela!';
print '<br><br>';

print ('Assim como em outras linguagens também é possivel usar o print!');
print ('<br><br>');

$varArray = [1,2,3,4,5];

print ('A função print_r possibilita o print de um array, como mostrado abaixo:<br>');
print_r ($varArray);
echo '<br><br>';

print ('A função var_dump possibilita a demonstração do conteudo e do tipo do conteudo inserido, como mostrado abaixo:<br>');
var_dump ($varArray);
echo '<br>';
var_dump ('Hello');
echo '<br>';
var_dump (12.3);
echo '<br><br><br>';


echo '11 - Comentários no PHP 7';
echo '<br><br><br>';

echo 'É possivel comentar linhas de codigo com os comandos // e /* */<br>';
echo 'Sendo // para comentarios em uma linha e /* */ para comentarios em bloco.';

// Um exemplo de comentario de uma linha :D
// echo 'Outro exemplo';

/*
Esse é um comentario em bloco
logo, varias linhas são comentadas
echo 'Podendo englobar...';
print (mais de um comando);
*/
echo '<br><br><br>';


echo '12 - Tipos de Variáveis no PHP 7';
echo '<br><br><br>';

echo 'É possivel criar variaveis com o comando $.';
echo '<br>';

$string = 'Carlos Ferreira';
$inteiro = 123;
$flutuante = 12.3;
$array = [1,2,3];
$flag = true;

/*
print $string;
print $inteiro;
print $flutuante;
print $array;
print $flag;
*/

echo 'Com php as variaveis não precisam ser declaradas com seu tipo, a linguagem sabe o tipo inserido!';
echo '<br><br>';

echo 'Tipos esses sendo por exemplo: Int, String, Float, Array, etc.';
echo '<br><br><br>';


echo '13 - Constantes no PHP 7';
echo '<br><br><br>';

echo 'Constantes são variaveis com valor imutavel após a linha de criação.';
echo '<br>';

echo 'Podem ser criadas com a função define ou com a função const!';
echo '<br><br>';

define ('CONSTANTE', 234);
const CONSTANTE_2 = 'Constante';

//var_dump(CONSTANTE);

?>