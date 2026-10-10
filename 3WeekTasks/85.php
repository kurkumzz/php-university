<?php
// Задача 85. 1 - A + A^2 - A^3 + ... + (-1)^N * A^N
echo "Введите A: "; $a = (float)trim(fgets(STDIN));
echo "Введите N (> 0): "; $n = (int)trim(fgets(STDIN));
if ($n <= 0) { echo "Ошибка: N должно быть > 0\n"; exit; }
$p = 1;   // (-1)^i * A^i
$s = 1;
for ($i = 1; $i <= $n; $i++) {
    $p *= -$a;
    $s += $p;
}
echo "Сумма = $s\n";
