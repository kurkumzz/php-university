<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Таблица степеней двойки от  нулевой до десятой.</title>
    <link rel="stylesheet" href="firstStyle.css">
    
</head>
<body>
<?php
echo "Таблица степеней двйоки: <br>";
for($i = 0; $i < 11; $i++){
    echo "Степень " . $i . " = " . pow(2, $i) . "<br><br>";

}
?>
</body>
</html>