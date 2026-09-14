<?php

function whoIsCloser(int $a, int $b, int $c): string
{
    $disB = abs(abs($a) - abs($b));
    $disC = abs(abs($a) - abs($c));
    if($disB < $disC) { return "Значение " . $b . " ближе." . PHP_EOL . "Расстояние: " . $disB; }
    elseif($disB > $disC) { return "Значение " . $c . " ближе." . PHP_EOL . "Расстояние: " . $disC; }
    else{ return "Равное расстояние" . $disB; }
}

echo whoIsCloser(-1, -10, 99);