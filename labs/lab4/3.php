<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Факториал числа </title>
    <link rel="stylesheet" href="firstStyle.css">
    
</head>
<body>
<?php
$num = $_POST["num"];

$result = 1;
for($i = 1; $i <= (int)$num; $i++){
    $result *= $i;
}

echo $result;

?>

</body>
</html>
