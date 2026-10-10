<?php
// Задача 41. Все степени A от 1 до N
echo "Введите A: "; $a = (float)trim(fgets(STDIN));
echo "Введите N (> 0): "; $n = (int)trim(fgets(STDIN));
if ($n <= 0) { echo "Ошибка: N должно быть > 0\n"; exit; }
$r = 1;
for ($i = 1; $i <= $n; $i++) {
    $r *= $a;
    echo "A^$i = $r\n";
}
