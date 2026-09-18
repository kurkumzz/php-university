<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Вычисление стоимости разговора по телефону</title>
    <link rel="stylesheet" href="firstStyle.css">
</head>
<body>
<?php
$weekDay = $_POST["weekDay"];
$minutesCount = $_POST["minutesCount"];
$oneMinutePrice = 9.2;

if ($weekDay < 1 || $weekDay > 7 || $minutesCount < 0) {
    echo "Неправильный ввод";
} elseif ($weekDay > 5) {
    echo "Предоставляется скидка 20%<br>";
    echo "Стоимость разговора: " . ($minutesCount * $oneMinutePrice * 20) / 100;
} else {
    echo "Стоимость разговора: " . $minutesCount * $oneMinutePrice;
}
?>
</body>
</html>