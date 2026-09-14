<?php
function daysCountInYear(int $year): string
{
    if($year < 0){ return 0; }
    if($year % 4 == 0 && $year % 100 != 0){
        return 366;
    } 
    return 365;
}

echo daysCountInYear(-2343);