<?php 
function sumOrZero(int $a, int $b): string
{
    $sum = $a + $b;
    if( $a != $b){
        $a = $sum; 
        $b = $sum;
        return "Переменные хранят сумму" . PHP_EOL . "a: " . $a . " b: " . $b;
    } elseif($a == $b) {
        $a = 0; 
        $b = 0;
        return "Переменные хранят ноль" . PHP_EOL . "a: " . $a . " b: " . $b;
    }
}

echo sumOrZero(1, 9);