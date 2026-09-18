<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Цифры на русском</title>
    <link rel="stylesheet" href="firstStyle.css">
    
</head>
<body>
<?php
$num = $_POST["num"];

switch($num)
{
    case 0:
        echo "ноль";
        break;
    case 1:
        echo "один";
        break;
    case 2:
        echo "два";
        break;
    case 3:
        echo "три";
        break;
    case 4:
        echo "четыре";
        break;
    case 5:
        echo "пять";
        break;
    case 6:
        echo "шесть";
        break;
    case 7:
        echo "семь";
        break;
    case 8:
        echo "восемь";
        break;
    case 9:
        echo "девять";
        break;
    default:
        echo "ошибка";
        break;

}
?>
</body>
</html>