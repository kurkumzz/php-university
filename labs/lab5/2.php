<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Сумма чисел заданного числа </title>
    <link rel="stylesheet" href="firstStyle.css">
    
</head>
<body>
<?php
//вычислить сумму чисел заданного числа
$n = $_POST["n"];   
$summ = 0;

for($i = 0; $i < strlen($n); $i++){
    $summ += $n[$i];
}

echo "Сумма чисел заданного числа: " . $summ;


?>

</body>
</html>
