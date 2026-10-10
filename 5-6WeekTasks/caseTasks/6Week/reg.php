<!DOCTYPE html>
<html>
<head>
    <meta charse .="UTF-8">
    <title>Вывод студента</title>
    <link rel ="stylesheet" href ="firstStyle.css">
    
</head>
<body>
<?php
$name = $_POST["name"];
$year = $_POST["mail"];
$group = $_POST["group"];
$work = $_POST["event"];

if($name != "" || $year != "" || $group != "" || $work != ""){

    echo "Студент: $name <br><br>";
    echo "Группа: $group <br><br>";
    echo "Специальность: $work <br><br>";
    echo "Текущий год обучения: $year";
} else{ echo "Ошибка"; }


?>
</body>
</html>