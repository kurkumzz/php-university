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
$dir = $_POST["dir"] ?? "";
$dirs = ["север", "запад", "юг", "восток"];
    
switch($posChoice)
{
    case "С": $currentPosNum = 0; break;
    case "З": $currentPosNum = 1; break;
    case "Ю": $currentPosNum = 2; break;
    case "В": $currentPosNum = 3; break;
    default:
        echo "ERROR <br> В НИКУДА";
        exit;
}

if($dir == 0){
    echo "Продолжается движение" . $dirs[$currentPosNum];
}elseif($dir == 1){
    $new = ($currentPosNum + 1) % 4;
    echo "Поворот налево<br>Робот смотрит на " . $dirs[$new];
}elseif ($dir == 2) {
    $new = ($currentPosNum + 3) % 4;
    echo "Поворот направо<br>Робот смотрит на " . $dirs[$new];
} else {
    echo "ERROR<br>Неизвестная команда";
}

?>
</body>
</html>