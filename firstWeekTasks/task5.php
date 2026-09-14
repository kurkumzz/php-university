<?php

function changeXYLoc(int $x, int $y): string
{
    $xValue = $x;
    $yValue = $y;

    if($x > $y){
        $x = $yValue;
        $y = $xValue;
        return "X = " . $x . " Y = " . $y;
    }elseif($y > $x){
        return "X = " . $x . " Y = " . $y;
    }
    return "X = " . $x . " Y = " . $y;
    
}
echo "Case x < y" . PHP_EOL;
echo changeXYLoc(1, 3) . PHP_EOL;
echo "Case x > y" . PHP_EOL;
echo changeXYLoc(3, 1) . PHP_EOL;
echo "Other case" . PHP_EOL;
echo changeXYLoc(0, 0);

