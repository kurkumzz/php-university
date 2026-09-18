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
if(strlen($num) > 2 || strlen($num) < 2 ) { echo "Ошибка";  exit; }

switch($num[0])
{
    case "2": $result  .= " двадцать"; break;
    case "3": $result  .= " тридцать"; break;
    case "4": $result  .= " сорок"; break;
    case "5": $result  .= " пятьдесят"; break;
    case "6": $result  .= " шестьдесят"; break;
    default: echo"Ошибка"; exit;
}

switch($num[1])
    {
        case "1": $result .= " один год"; break;
        case "2": $result .= " два года"; break;
        case "3": $result .= " три года"; break;
        case "4": $result .= " четыре лет"; break;
        case "5": $result .= " пять лет"; break;
        case "6": $result .= " шесть лет"; break;
        case "7": $result .= " семь лет"; break;
        case "8": $result .= " восемь лет"; break;
        case "9": $result .= " девять лет"; break;
        default: echo"Ошибка"; exit;
    }


echo "Запись числа письменно: " . $result;

?>
</body>
</html>