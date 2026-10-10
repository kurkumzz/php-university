<?php
// Задача 54. X - X^3/3 + X^5/5 - ... + (-1)^N X^(2N+1)/(2N+1)  (приближение arctg(X))
echo "Введите X (|X| < 1): "; $x = (float)trim(fgets(STDIN));
echo "Введите N (> 0): "; $n = (int)trim(fgets(STDIN));
if (abs($x) >= 1 || $n <= 0) { echo "Ошибка: нужно |X| < 1 и N > 0\n"; exit; }
$p = $x;   // (-1)^i * X^(2i+1)
$s = $x;
for ($i = 1; $i <= $n; $i++) {
    $p = -$p * $x * $x;
    $s += $p / (2 * $i + 1);
}
echo "Сумма = $s\n";
echo "arctg(X) = " . atan($x) . "\n";
