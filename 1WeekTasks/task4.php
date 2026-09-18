<?php
function biggestAndSmallestNumber(int $first, int $second, int $third) : string
{
    $resultBig = "The biggest number is ";
    $resultSmall = " The smallest number is ";
    if($first >= $second && $first >= $third){
        $resultBig .= $first;
    } elseif($second >= $first && $second >= $third){
        $resultBig .= $second;
    } 
    else{
        $resultBig .=  $third;
    }

    if($first <= $second && $first <= $third){
        $resultSmall .= $first;
    } elseif($second <= $first && $second <= $third){
        $resultSmall .= $second;
    } 
    
    else{
        $resultSmall .= $third;
    }

    return $resultBig . PHP_EOL . $resultSmall;
}

echo biggestAndSmallestNumber(0, 5, 1);