<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Вычисление стоимости разговора по телефону</title>
    <link rel="stylesheet" href="firstStyle.css">
    
</head>
<body>
<?php
$cityCode = $_POST["cityCode"];
$minutesCount = $_POST["minutesCount"];

$minutePrice = null;
$city = "";
$result;



switch($cityCode)
{
    case 495:
        $minutePrice = 120.2;
        $city = "Москва";
        break;
    case 717:
        $minutePrice = 65.40;
        $city = "Астана";
        break;
    case 371:
        $minutePrice = 150.60;
        $city = "Рига";
        break;
    case 710:
        $minutePrice = 64.30;
        $city = "Караганда";
        break;
    default:
        $minutePrice = 999999.99;
        $city = "Сайлент Хилл";
}


if(ctype_digit($cityCode) && ctype_digit($minutesCount) && $minutePrice != 999999.99){
    $result = $minutesCount * $minutePrice;
    echo "Город: " . $city . "<br>";
    echo "Цена минуты: " . $minutePrice . " тенге" . "<br>";
    echo "Стоимость разговора: " . $result;
} else{
    if(is_numeric($_POST["minutesCount"])){
        echo "Вы пытались сломать программу<br>";
        echo "Для вас назначена максимальная цена за минуты<br>";
        $result = $minutesCount * $minutePrice;
        echo "Цена минуты: " . $minutePrice . " долларов<br>";
        echo "Стоимость разговора: " . $result;
    } else{
        
        echo '<a href="scream.php">Нажмите, чтобы вернуться назад</a>';
        
    }
}




?>
</body>
</html>