<?php
// Задача 52. 1 - X^2/2! + X^4/4! - ... + (-1)^N X^(2N)/(2N)!  (приближение cos(X))
echo "Введите X: "; $x = (float)trim(fgets(STDIN));
echo "Введите N (> 0): "; $n = (int)trim(fgets(STDIN));
if ($n <= 0) { echo "Ошибка: N должно быть > 0\n"; exit; }
$t = 1.0;
$s = 1.0;
for ($i = 1; $i <= $n; $i++) {
    $t = -$t * $x * $x / ((2 * $i - 1) * (2 * $i));
    $s += $t;
}
echo "Сумма = $s\n";
echo "cos(X) = " . cos($x) . "\n";
