<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Решение функции. Шаг 0.5 </title>
    <link rel="stylesheet" href="firstStyle.css">
    
</head>
<body>
<?php
//y = -2.4 x2 + 5x – 3 

for($i = 0; $i <= 2; $i+=0.5){
    echo "Число: " . $i;
    echo " Ответ: " . -2.4 * pow($i, 2) + 5 * $i - 3 . "<br>";
    

}
?>
</body>
</html>