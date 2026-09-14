<?php
function whichQuarter(int $x, int $y): int
{
    if($x > 0 && $y > 0) { return 1; }
    elseif($x > 0 && $y < 0) { return 2; }
    elseif($x < 0 && $y < 0) { return 3; }
    elseif($x < 0 && $y > 0) { return 4; }

    return 0;

}

echo whichQuarter(1, -8);