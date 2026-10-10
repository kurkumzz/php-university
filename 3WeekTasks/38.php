<?php
// Задача 38. Числа от A до B (включительно) по возрастанию и их количество N
echo "Введите A: "; $a = (int)trim(fgets(STDIN));
echo "Введите B (B > A): "; $b = (int)trim(fgets(STDIN));
if ($a >= $b) { echo "Ошибка: должно быть A < B\n"; exit; }
$n = 0;
for ($i = $a; $i <= $b; $i++) {
    echo $i . " ";
    $n++;
}
echo "\nN = $n\n";
