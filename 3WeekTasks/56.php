<?php
// Задача 56. Значения F(X) = 1 - sin(X) в N равноотстоящих точках отрезка [A, B]
echo "Введите N (> 2): "; $n = (int)trim(fgets(STDIN));
echo "Введите A: "; $a = (float)trim(fgets(STDIN));
echo "Введите B (B > A): "; $b = (float)trim(fgets(STDIN));
if ($n <= 2 || $a >= $b) { echo "Ошибка: нужно N > 2 и A < B\n"; exit; }
$h = ($b - $a) / ($n - 1);
for ($i = 0; $i < $n; $i++) {
    $x = $a + $i * $h;
    echo "F($x) = " . (1 - sin($x)) . "\n";
}
