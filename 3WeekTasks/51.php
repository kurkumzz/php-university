<?php
// Задача 51. X - X^3/3! + X^5/5! - ... + (-1)^N X^(2N+1)/(2N+1)!  (приближение sin(X))
echo "Введите X: "; $x = (float)trim(fgets(STDIN));
echo "Введите N (> 0): "; $n = (int)trim(fgets(STDIN));
if ($n <= 0) { echo "Ошибка: N должно быть > 0\n"; exit; }
$t = $x;   // текущее слагаемое
$s = $x;
for ($i = 1; $i <= $n; $i++) {
    $t = -$t * $x * $x / ((2 * $i) * (2 * $i + 1));
    $s += $t;
}
echo "Сумма = $s\n";
echo "sin(X) = " . sin($x) . "\n";
