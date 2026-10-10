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
$list = [];
$current = null;
for($i = 0; $i < (int)$n; $i++){
    $current = $i**2; 
    if((string)$current == sttrev($current)){
        $list[] = $current;
        

    }
     
    
}




?>

</body>
</html>
