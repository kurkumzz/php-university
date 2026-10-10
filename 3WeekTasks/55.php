<?php
// Задача 55. Разбиение отрезка [A, B] на N точек: шаг H и сами точки
echo "Введите N (> 2): "; $n = (int)trim(fgets(STDIN));
echo "Введите A: "; $a = (float)trim(fgets(STDIN));
echo "Введите B (B > A): "; $b = (float)trim(fgets(STDIN));
if ($n <= 2 || $a >= $b) { echo "Ошибка: нужно N > 2 и A < B\n"; exit; }
$h = ($b - $a) / ($n - 1);
echo "H = $h\n";
for ($i = 0; $i < $n; $i++) {
    echo ($a + $i * $h) . " ";
}
echo "\n";
