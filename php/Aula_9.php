<?php

echo '33~40 - Manipulações de Strings no PHP';
echo '<br><br><br>';

$name = 'EspecializaTi - Cursos Online de TI';

echo strtoupper($name);
echo '<hr>';
echo strtolower($name);
echo '<hr>';
echo ucfirst(strtolower($name));
echo '<hr>';
echo ucwords(strtolower($name));

echo '<hr>';

$info = 'São Paulo/SP/Brazil/Americas/Terra';
$arrayInfo = explode('/', $info);
var_dump($arrayInfo[2]);

echo '<hr>';

$arrayTest = ['A','Função','Implode','Junta','O','Array'];
echo implode($arrayTest);

echo '<hr>';

$name = ' EspecializaTi  ';
var_dump($name);
echo '<hr>';
var_dump(ltrim($name));
echo '<hr>';
var_dump(rtrim($name));
echo '<hr>';
var_dump(trim($name));

echo '<hr>';

$domain = 'https://www.especializati.com';

// echo str_replace('www.', 'https://www.', $domain);
// echo substr($domain, 0, 4);
// echo substr($domain, -7);

$protocol = substr($domain, 0, 8);
if ($protocol == 'https://')
    echo 'É seguro!';
else
    echo 'Não é seguro!';

echo '<hr>';

//  var_dump(substr($domain, 12, -7));

echo strlen($domain);

echo '<hr>';

$name_new = 'João Freire - ';

if (isset($name_new))
    echo $name_new;
else
    echo 'Não existe!';

unset($name_new);

if (isset($name_new))
    echo $name_new;
else
    echo 'Não existe!';

echo '<hr>';

date_default_timezone_set('America/Sao_Paulo');
echo 'Ano Atual: ' . date('Y') . '<br>';
echo 'Mês Atual: ' . date('m') . '<br>';
echo 'Dia Atual: ' . date('d') . '<br>';
echo 'Data Atual: ' . date('d/m/Y') . '<br>';
echo 'Data Atual: ' . date('Y-m-d') . '<br>';
echo 'Hora Atual: ' . date('H') . '<br>';
echo 'Minuto Atual: ' . date('i') . '<br>';
echo 'Segundo Atual: ' . date('s') . '<br>';
echo 'Horario Atul: ' . date('H:i:s') . '<br>';
echo 'Timrzone: ' . date_default_timezone_get() . '<br>';

echo '<hr>';

$password = '123456';

// echo md5($password);
// echo sha1($password);
// echo crypt($password, $salt);
// $passCr = base64_encode($password);
// echo $passCr;
// echo base64_encode($passCr);
// echo hash('sha512', $password);

echo cryptC($password);

function cryptC(String $value): String
{
    $hash = hash('sha512', sha1(md5(crypt($value, 'JASnio1239*#'))));
    return $hash;
}

?>