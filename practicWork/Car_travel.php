<?php
echo "Расстояние до дачи: " . $_POST["Distance"] . "<br>";
echo "Количестве бензина: " . $_POST["Petrol"] . "<br>";
echo "Цена одного литра бензина: " . $_POST["Price"] . "<br>";
$res["res"]=($_POST["Petrol"]*$_POST["Price"]*$_POST["Distance"])/100;
echo "стоимость поездки: " . $res["res"] . "<br>";
?>
