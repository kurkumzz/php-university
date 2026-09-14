<?php
function smallestNumber(int $first, int $second, int $third) : int
{
    if($first <= $second && $first <= $third){
        return $first;
    } elseif($second <= $first && $second <= $third){
        return $second;
    } 
    return $third;
    
}

echo smallestNumber(3, 5, 1);