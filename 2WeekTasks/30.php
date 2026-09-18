<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Направление робота</title>
    <link rel="stylesheet" href="firstStyle.css">
    
</head>
<body>
<?php
$posChoice = $_POST["pos"] ?? "";
$dir1 = $_POST["dir1"] ?? "";
$dir2 = $_POST["dir2"] ?? "";
$dirs = ["север", "запад", "юг", "восток"];

switch ($posChoice) {
    case "С": $currentPosNum = 0; break;
    case "З": $currentPosNum = 1; break;
    case "Ю": $currentPosNum = 2; break;
    case "В": $currentPosNum = 3; break;
    default:
        echo "ERROR <br> В НИКУДА";
        exit;
}

function turn($current, $command, $dirs) {
    if ($command === "" || $command === null) {
        return $current; // команды нет — ничего не делаем
    }

    if ($command == 0) {
        $new = ($current + 1) % 4;
        echo "Поворот налево<br>Робот смотрит на " . $dirs[$new] . "<br>";
        return $new;
    } elseif ($command == 1) {
        $new = ($current + 3) % 4;
        echo "Поворот направо<br>Робот смотрит на " . $dirs[$new] . "<br>";
        return $new;
    } elseif ($command == 2) {
        $new = ($current + 2) % 4;
        echo "Поворот на 180 градусов<br>Робот смотрит на " . $dirs[$new] . "<br>";
        return $new;
    } else {
        echo "ERROR<br>Неизвестная команда<br>";
        return $current;
    }
}

echo "Сначала смотрел на " . $dirs[$currentPosNum] . "<br><br>";

$currentPosNum = turn($currentPosNum, $dir1, $dirs);
$currentPosNum = turn($currentPosNum, $dir2, $dirs);

?>
</body>
</html>