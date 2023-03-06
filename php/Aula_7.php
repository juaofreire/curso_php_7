<?php

echo '26~28 - Loops de Repetição no PHP';
echo '<br><br><br>';

$names = ['Utilizamos ', 'a ', 'função ', 'for ', 'para ', 'loopings.'];


for ($i = 0; $i<count($names); $i++) {
    echo $names[$i];
}

/*
for ($i = 10; $i>0; $i--) {
    echo "{$i} <br>";
}

for ($i = 0; $i<10; $i++) {
    echo "{$i} <br>";
}
*/

echo '<br><br>';

$names = [
    'a' => 'aa',
    'b' => 'bb',
    'c' => 'cc',
    'd' => 'dd',
    'e' => 'ee',
    'f' => 'ff',
    'g' => 'gg',
    'h' => 'hh',
];

foreach ($names as $key => $name) {
    echo "{$key} => {$name} <br>";
}

echo '<br>';

$names = ['Também ', 'usamos ', 'a ', 'função ', 'while', '.'];

while ($i < count($names)) {
    echo $names[$i];
    $i++;
}

$a = 1;

do {
    echo $names[$a-1];
    $a++;
} while ($a <= 6);

?>