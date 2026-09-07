<?php
//1
function cilynderVolume(float $radius,float $height): float { return pi() * ($radius ** 2) * $height; }

echo "Задача 1" . PHP_EOL;
echo "Объем цилиндра: " . cilynderVolume(3, 5);

//2
function maxValue(int $a, int $b): int
{
    return max($a, $b);
}

echo PHP_EOL . "Задача 2" . PHP_EOL;
echo maxValue(1, 4);

//3
function comparisonSymbolReturn(int $a, int $b): string
{
    if($a > $b) { return ">"; }
    elseif($a < $b) { return "<"; }
    return "=";
}
echo PHP_EOL ."Задача 3" . PHP_EOL;
echo comparisonSymbolReturn(3, 4);
//4
function aInBDeegre(float $a, float $b): float
{
    if($a < 0 || $b < 0) { return 0; }

    return pow($a, $b);
}

echo PHP_EOL ."Задача 4" . PHP_EOL;
echo aInBDeegre(5, 7);
//5
function procent(float $a): float{ return $a / 100; }
echo PHP_EOL ."Задача 5" . PHP_EOL;
echo procent(5);

//6
function dohod(int $firstPay, int $procent, int $period): int
{
    return $firstPay * ((1 + $procent / 100) ** $period);
}
echo PHP_EOL ."Задача 6 . PHP_EOL";
echo dohod(50000, 20, 9);

//7
function parallelepipedVolumeAndSpace(int $a, int $b, int $c): string
{
    $space = 2*($a*$b + $b*$c + $a*$c);
    $volume = $a * $b *$c;

    return "Площадь: " . $space . " Объем: " . $volume;
}

echo PHP_EOL . "Задача 7";
echo parallelepipedVolumeAndSpace(3, 4, 5);
