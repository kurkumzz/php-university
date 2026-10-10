<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Палиндром </title>
    <link rel="stylesheet" href="firstStyle.css">
    
</head>
<body>
<?php
//вычислить сумму чисел заданного числа
$n = $_POST["n"];   
$nReverse = strrev($n);

if($n == $nReverse) { echo "Число палиндром"; }
else{ echo "Число не палиндром"; }



?>

</body>
</html>
