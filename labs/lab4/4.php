<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Факториал числа </title>
    <link rel="stylesheet" href="firstStyle.css">
    
</head>
<body>
<?php
function countDivisors(int $n): int {
    $count = 0;
    for ($i = 1; $i * $i <= $n; $i++) {
        if ($n % $i == 0) {
            // i и n/i — пара делителей; если они равны, считаем один раз
            $count += ($i * $i == $n) ? 1 : 2;
        }
    }
    return $count;
}

$maxNumber = 1;
$maxCount  = 1;

for ($n = 1; $n <= 1000; $n++) {
    $c = countDivisors($n);
    if ($c > $maxCount) {
        $maxCount  = $c;
        $maxNumber = $n;
    }
}

echo "Число: $maxNumber, количество делителей: $maxCount\n";
?>

</body>
</html>
