<?php

function valueDiscription(int $num): string
{
    switch(true){
        case $num > 0 && $num  < 10:
            if($num % 2 == 0){
                return "Однозначное четное число";
            } else{
                return "Однозначное нечетное число";
            }
            break;
        case $num >= 10 && $num < 100:
            if($num % 2 == 0){
                return "Двухзначное четное число";
            } else{
                return "Двухзначное нечетное число";
            }
            break;
        case $num >= 100 && $num < 1000:
            if($num % 2 == 0){
                return "Трехзначное четное число";
            } else{
                return "Трехзначное нечетное число";
            }
            break;
        case $num >= 1000 && $num < 10000:
            if($num % 2 == 0){
                return "Четырехзначное четное число";
            } else{
                return "Четырехзначное нечетное число";
            }
            break;
    }
}

echo  valueDiscription(31);