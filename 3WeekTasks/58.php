<?php
// Задача 58. A1 = 1, A2 = 2, AN = (A(N-2) + A(N-1)) / 2. Первый K, при котором |AK - A(K-1)| < D
echo "Введите D (> 0): "; $d = (float)trim(fgets(STDIN));
if ($d <= 0) { echo "Ошибка: D должно быть > 0\n"; exit; }
$prev = 1.0;  // A1
$cur  = 2.0;  // A2
$k = 2;
while (abs($cur - $prev) >= $d) {
    $next = ($prev + $cur) / 2;
    $prev = $cur;
    $cur = $next;
    $k++;
}
echo "K = $k\nA(K-1) = $prev\nA(K) = $cur\n";
