<?php
// Задача 39. Числа между A и B (не включая) по убыванию и их количество N
echo "Введите A: "; $a = (int)trim(fgets(STDIN));
echo "Введите B (B > A): "; $b = (int)trim(fgets(STDIN));
if ($a >= $b) { echo "Ошибка: должно быть A < B\n"; exit; }
$n = 0;
for ($i = $b - 1; $i > $a; $i--) {
    echo $i . " ";
    $n++;
}
echo "\nN = $n\n";
