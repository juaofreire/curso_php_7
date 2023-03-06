<?php

// 4 => 4*3*2*1 = 24
// 3 => 3*2*1 = 6
// 2 => 2*1 = 2

echo '29~32 - Funções no PHP';
echo '<br><br><br>';

function fatorial (int $number) {

    if ($number <=1)
        $number = $number;
    else
        $number *= fatorial($number -1);
    return $number;

}

function pt ($value) {

    echo "{$value} <br>";

}

echo 'Valor informado 3 => Fatorial: ';

pt (fatorial (3));

echo 'Valor informado 2 => Fatorial: ';

pt (fatorial (2));

echo 'Valor informado 4 => Fatorial: ';

pt (fatorial (4));

?>