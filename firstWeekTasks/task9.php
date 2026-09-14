<?php 
function equalOrNot(int $a, int $b): string
{
    if( $a != $b){
        if($a > $b) {
            $b = $a; 
        } elseif($a < $b){
            $b = $a; 
        }
        return "Теперь переменные равны " . PHP_EOL . "a: " . $a . " b: " . $b;
    } elseif($a == $b) {
        $a = 0; 
        $b = 0;
        return "Переменные хранят ноль" . PHP_EOL . "a: " . $a . " b: " . $b;
    }
}

echo equalOrNot(1, 9);