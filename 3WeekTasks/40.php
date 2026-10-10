<?php
// Задача 40. A в степени N (перемножение в цикле)
echo "Введите A: "; $a = (float)trim(fgets(STDIN));
echo "Введите N (> 0): "; $n = (int)trim(fgets(STDIN));
if ($n <= 0) { echo "Ошибка: N должно быть > 0\n"; exit; }
$r = 1;
for ($i = 1; $i <= $n; $i++) {
    $r *= $a;
}
echo "A^N = $r\n";
