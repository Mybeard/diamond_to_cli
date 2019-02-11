<?php

$diagonal = $argv[1];

if(!(isset($diagonal))) {
    exit("Ne zadan razmer diagonali");
}

for ($i = 1; $i < $diagonal; $i++) {
    for ($j = $i; $j < $diagonal; $j++) {
        echo " ";
    }
    for ($j = 2 * $i - 1; $j > 0; $j--) {
        echo ("*");
    }
    echo PHP_EOL;
}
for ($i = $diagonal; $i > 0; $i--) {
    for ($j = $diagonal - $i; $j > 0; $j--) {
        echo " ";
    }
    for ($j = 2 * $i - 1; $j > 0; $j--) {
        echo ("*");
    }
    echo PHP_EOL;
}