<?php
// Задача 53. X - X^2/2 + X^3/3 - ... + (-1)^(N-1) X^N/N  (приближение ln(1+X))
echo "Введите X (|X| < 1): "; $x = (float)trim(fgets(STDIN));
echo "Введите N (> 0): "; $n = (int)trim(fgets(STDIN));
if (abs($x) >= 1 || $n <= 0) { echo "Ошибка: нужно |X| < 1 и N > 0\n"; exit; }
$p = 1.0;  // (-1)^(i-1) * X^i
$s = 0.0;
for ($i = 1; $i <= $n; $i++) {
    $p = ($i == 1) ? $x : -$p * $x;
    $s += $p / $i;
}
echo "Сумма = $s\n";
echo "ln(1+X) = " . log(1 + $x) . "\n";
