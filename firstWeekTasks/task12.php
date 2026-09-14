<?php
function pointCoordinate(int $x, int $y): int
{
    if($x != 0 && $y != 0) { return 0; }
    elseif($x == 0 && $y == 0) { return 1; }
    elseif($x != 0 && $y == 0 ){ return 2; }
    return 3;

}

echo pointCoordinate(1, -8);