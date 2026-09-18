<?php
function task1(int $n): int
{
    if($n < 0){
        return $n * $n;
    } elseif ($n > 0) {
        return $n * $n * $n;
    }

    return $n;
}

$numbers = [0, 8, -8];
$current = 1;

foreach ($numbers as $n) 
{
    echo $current . " result: " . task1($n) . PHP_EOL;
    $current++;
}