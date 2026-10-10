<?php
// Задача 50. 1 + X + X^2/2! + ... + X^N/N!  (приближение exp(X))
echo "Введите X: "; $x = (float)trim(fgets(STDIN));
echo "Введите N (> 0): "; $n = (int)trim(fgets(STDIN));
if ($n <= 0) { echo "Ошибка: N должно быть > 0\n"; exit; }
$t = 1.0;  // текущее слагаемое X^i / i!
$s = 1.0;
for ($i = 1; $i <= $n; $i++) {
    $t = $t * $x / $i;
    $s += $t;
}
echo "Сумма = $s\n";
echo "exp(X) = " . exp($x) . "\n";
