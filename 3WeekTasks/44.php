<?php
// Задача 44. Наибольшее K, при котором 3^K < N, и значение 3^K
echo "Введите N (> 1): "; $n = (int)trim(fgets(STDIN));
if ($n <= 1) { echo "Ошибка: N должно быть > 1\n"; exit; }
$k = 0;
$p = 1;
while ($p * 3 < $n) {
    $p *= 3;
    $k++;
}
echo "K = $k\n3^K = $p\n";
