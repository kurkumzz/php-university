<?php
function findImposter(int $num1, int $num2, int $num3, int $num4): int
{
    if($num1 != $num2 && $num1 != $num3 && $num1 != $num4) { return 1;} 
    elseif($num2 != $num1 && $num2 != $num3 && $num2 != $num4){ return 2; }
    elseif($num3 != $num1 && $num3 != $num2 && $num3 != $num4){ return 3; }
    elseif($num4 != $num1 && $num4 != $num2 && $num4 != $num3){ return 4; }

    return 0; 
}

echo findImposter(1, 1, 1, 2);