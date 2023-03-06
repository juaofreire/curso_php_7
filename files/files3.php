<?php

$text = 'Em linguística, a noção de texto é ampla.';

generateLog($text);

function generateLog($text){

    $file = fopen('projetoX.log', 'a+');

    fwrite($file, "$text \r\n");

    fclose($file);
}

?>