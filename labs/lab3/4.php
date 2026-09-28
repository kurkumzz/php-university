<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Сумма первых n целых положительных целых чисел</title>
    <link rel="stylesheet" href="firstStyle.css">
    
</head>
<body>
<?php
$num=$_POST["num"] ?? "";
$count=$_POST["count"] ?? "";
$numHere = intval($num);
$countHere = intval($count);
$n = 0;
$sum = 0;

if($countHere <= 0 || $numHere <= 0){ echo "Неправильный ввод"; }
while($n != $countHere){
    $numHere++;
    $sum += $numHere;
    $n++;
}
echo "Сумма первых " . $count . " чисел после числа " . $num . ": " . $sum;
?>
</body>
</html>