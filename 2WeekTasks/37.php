<!DOCTYPE html>
<html>
<head>
    <meta charse .="UTF-8">
    <title>Словестный вывод строки</title>
    <link rel ="stylesheet" href ="firstStyle.css">
    
</head>
<body>
<?php
$num = $_POST["num"];
$num = (string)$num;
$result = "";
if(strlen($num) > 3 || strlen($num) < 3 ) { echo "Ошибка";  exit; }
switch($num[0])
{
    case "1": $result .= "сто"; break;
    case "2": $result .= "двести"; break;
    case "3": $result .= "триста"; break;
    case "4": $result .= "четыреста"; break;
    case "5": $result .= "пятьсот"; break;
    case "6": $result .= "шестьсот"; break;
    case "7": $result .= "семьсот"; break;
    case "8": $result .= "восемьсот"; break;
    case "9": $result .= "девятьсот"; break;
    default: $result = 0; break;
}

if($num[1] == "1"){
    switch($num[1])
{
    case "1": $result .= " одинадцать"; break;
    case "2": $result .= " двенадцать"; break;
    case "3": $result .= " тринадцать"; break;
    case "4": $result .= " четырнадцать"; break;
    case "5": $result .= " пятнадцать"; break;
    case "6": $result .= " шестьнадцать"; break;
    case "7": $result .= " семьнадцать"; break;
    case "8": $result .= " восемьнадцать"; break;
    case "9": $result .= " девятьнадцать"; break;
    default: $result = 0; break;
}
}else{
    switch($num[1])
    {
    case "2": $result  .= " двадцать"; break;
    case "3": $result  .= " тридцать"; break;
    case "4": $result  .= " сорок"; break;
    case "5": $result  .= " пятьдесят"; break;
    case "6": $result  .= " шестьдесят"; break;
    case "7": $result  .= " семьдесят"; break;
    case "8": $result  .= " восемьдесят"; break;
    case "9": $result  .= " девяносто"; break;
    }

    switch($num[2])
    {
        case "1": $result .= " один"; break;
        case "2": $result .= " два"; break;
        case "3": $result .= " три"; break;
        case "4": $result .= " четыре"; break;
        case "5": $result .= " пять"; break;
        case "6": $result .= " шесть"; break;
        case "7": $result .= " семь"; break;
        case "8": $result .= " восемь"; break;
        case "9": $result .= " девять"; break;
    }
}

if($result == 0) { echo "Ошибка"; };
echo "Запись числа письменно: " . $result;

?>
</body>
</html>