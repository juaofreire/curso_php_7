<?php

echo '22~25 - Operadores Condicionais no PHP';
echo '<br><br><br>';

$number = 10;


if ($number == 12)
    echo 'Doze';
elseif ($number == 13)
    echo 'Treze';
elseif ($number == 14)
    echo 'Quatorze';
elseif ($number == 15)
    echo 'Quinze';
else
    echo 'Utilizamos o if, elseif e else para condicionais.';

echo '<br><br>';


switch ($number) {
    case 11:
        echo 'Onze';
        break;

    case 12:
        echo 'Doze';
        break;

    case 13:
        echo 'Treze';
        break;
                
    default:
        echo 'Pode-se utilizar o Switch Case para simplificar um condicional com muitos casos.';
        break;
}

?>