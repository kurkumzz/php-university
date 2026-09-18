<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Следующая дата</title>
    <link rel="stylesheet" href="firstStyle.css">
</head>
<body>
<?php
$d = $_POST["d"] ?? "";
$m = $_POST["m"] ?? "";

$days = [0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

if (!is_numeric($d) || !is_numeric($m)) {
    echo "Неправильный ввод";
    exit;
}

$d = (int)$d;
$m = (int)$m;

if ($m < 1 || $m > 12 || $d < 1 || $d > $days[$m]) {
    echo "Неправильная дата";
    exit;
}

if ($d < $days[$m]) {
    $d = $d + 1;
} else {
    $d = 1;
    if ($m == 12) {
        $m = 1;
    } else {
        $m = $m + 1;
    }
}

echo "Следующая дата: D = " . $d . ", M = " . $m;
?>
</body>
</html>