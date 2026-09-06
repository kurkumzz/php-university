<?php
function biggestNumber(int $first, int $second, int $third) : int
{
    if($first >= $second && $first >= $third){
        return $first;
    } elseif($second >= $first && $second >= $third){
        return $second;
    } 
    
    else{
        return $third;
    }
}

echo biggestNumber(3, 5, 1);