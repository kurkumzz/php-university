<?php
// Задача 42. 1 + A + A^2 + ... + A^N
echo "Введите A: "; $a = (float)trim(fgets(STDIN));
echo "Введите N (> 0): "; $n = (int)trim(fgets(STDIN));
if ($n <= 0) { echo "Ошибка: N должно быть > 0\n"; exit; }
$p = 1;   // текущая степень A
$s = 1;   // сумма
for ($i = 1; $i <= $n; $i++) {
    $p *= $a;
    $s += $p;
}
echo "Сумма = $s\n";
