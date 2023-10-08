<?php

//Type coercion
function sum(int $x, int $y){
    var_dump($x, $y);
    echo '<br />';
    return $x + $y;
}

$sum = sum(2.5, '3');

echo $sum . '<br />';

var_dump($sum);


//Typecasting
$x = (int)'5';

var_dump($x);


