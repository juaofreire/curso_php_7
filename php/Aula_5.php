<?php

echo '20 - Concatenação no PHP';
echo '<br><br><br>';

$var1 = 'Utilizamos o . ';
$var2 = 'para concatenar no PHP!';

$var3 = $var1 . ' ' . $var2 . ' ' . 12;
$var4 = $var1 . $var2 . '<br>';
echo $var4;

$name = 'Carlos Ferreira';
$company = 'EspecializaTi';

echo '<br>Outro modo de concatenar seria a utilização das aspas duplas e chaves nas variaveis:<br>';

// echo 'O ' . $name . ' é fundador da Empresa: ' . $company ;
echo "O {$name} é fundador da Empresa: {$company}";
//echo 'Olá mundo!';
echo '<br><br><br>';

?>