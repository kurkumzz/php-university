<?php
function doubleOrChangeNum(int $num1, int $num2, int $num3): string
{
    if($num3 > $num2  && $num2 > $num1){ return "1: " . $num1 * 2 . " 2: " . $num2 * 2 . " 3: " . $num3 * 2; }
    return "1: " . -$num1 . " 2: " . -$num2 . " 3: " . -$num3;
}

echo doubleOrChangeNum(1, 6, 7);