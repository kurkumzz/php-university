<?php
function biggestAndSmallestNumber(int $first, int $second, int $third) : string
{
    //if($first >= $second && $first >= $third && $second <= $first && $second <= $third){
        //return "The biggest: " . $first . PHP_EOL . "The smallest: " . $second;
    //} elseif($second >= $first && $second >= $third){
        //return $second;
    //} 
    
    //else{
        //return $third;
    //}

    if($first >= $second && $first <= $third){
        return $second . PHP_EOL . $third;
    } elseif($second >= $first && $second <= $third){
        return $first . PHP_EOL . $third;
    }
    else{
        return $first . PHP_EOL . $second;
    }
}

echo biggestAndSmallestNumber(3, 5, 1);