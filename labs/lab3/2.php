<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Вывод 10 квадратов чисел</title>
    <link rel="stylesheet" href="firstStyle.css">
    
</head>
<body>
<?php
$num=$_POST["num"] ?? "";
$n = intval($num);
$n10 = $n + 10;
echo "Таблица квадратов чисел от $n до $n10: <br>";
while($n != $n10){
    echo $n**2 . "<br>";
    $n++;
}
?>
</body>
</html>