<?php

echo '41~45 - Operadores no PHP';
echo '<br><br><br>';

$a = 4;
$b = 2;

$result = $a + $b;
echo "O resultado da soma entre {$a} + {$b} = {$result} <br>";

$result = $a - $b;
echo "O resultado da subtração entre {$a} - {$b} = {$result} <br>";

$result = $a * $b;
echo "O resultado da multiplicação entre {$a} * {$b} = {$result} <br>";

$result = $a / $b;
echo "O resultado da divisão entre {$a} / {$b} = {$result} <br>";

$result = $a % $b;
echo "O resultado da resto entre {$a} % {$b} = {$result} <br>";


if ($b % 2 == 0)
    echo 'Par  ';
else
    echo 'Impar  ';


$result = ((2 + (2 - 3)) / 4) * 2;

echo $result;

echo '<hr>';


$a = 12;
echo "{$a} <br>";

$a += 14;
echo "{$a} <br>";

$a -= 14;
echo "{$a} <br>";

$a *= 2;
echo "{$a} <br>";

$a /= 2;
echo "{$a} <br>";

echo '<hr>';

// $a++;
// $a--;
// ++$a;
// --$a;

// pós ocorre após o ato, pre ocorre antes/durante

if (!$a = 2) {
    echo 'No IF';
} else {
    echo 'No ELSE';
}

echo '<br>';

if (($a == $b && $a == 2) || $b == 2) {
    echo 'No IF';
} else {
    echo 'No ELSE';
}

echo '<br>';

if (!$a != 2) {
    echo 'No IF';
} else {
    echo 'No ELSE';
}

$b = '2';

if ($a === $b) {
    echo 'No IF';
} else {
    echo 'No ELSE';
}

?>