<?php
// Задача 57. A1 = 2, AN = 2 + 1/A(N-1). Первый K, при котором |AK - A(K-1)| < D
echo "Введите D (> 0): "; $d = (float)trim(fgets(STDIN));
if ($d <= 0) { echo "Ошибка: D должно быть > 0\n"; exit; }
$prev = 2.0;            // A1
$cur  = 2 + 1 / $prev;  // A2
$k = 2;
while (abs($cur - $prev) >= $d) {
    $prev = $cur;
    $cur = 2 + 1 / $prev;
    $k++;
}
echo "K = $k\nA(K-1) = $prev\nA(K) = $cur\n";
