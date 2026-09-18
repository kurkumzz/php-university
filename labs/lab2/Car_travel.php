<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Вычисление стоимости разговора по телефону</title>
    <link rel="stylesheet" href="firstStyle.css">
</head>
<body>
<?php
echo "Расстояние до дачи: " . $_POST["Distance"] . "<br>";
echo "Количестве бензина: " . $_POST["Petrol"] . "<br>";
echo "Цена одного литра бензина: " . $_POST["Price"] . "<br>";
$res["res"]=($_POST["Petrol"]*$_POST["Price"]*$_POST["Distance"])/100;
echo "стоимость поездки: " . $res["res"] . "<br>";
?>
</body>
</html>