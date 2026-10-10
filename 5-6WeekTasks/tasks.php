<?php
$tasks = [
    59 => "(1)",
    60 => "(2)",
    61 => "(3)",
    62 => "(4)",
    63 => "(5)",
    64 => "(6)",
    65 => "(7)",
    66 => "(8)",
    67 => "(9)",
    68 => "(10)",
    69 => "(11)",
    70 => "(12)",
    71 => "(13)",
    72 => "(14)",
    73 => "(15)",

];


function task59(){
    ?>
    <h3>Задача 59</h3>
    <p>Даны десять чисел. Вывести их среднее арифметическое.</p>
    <form method="post">
    <button type = "submit" name = "result"> Генерация чисел</button>
    </form><hr>
    
    <?php
    $nums = new SplFixedArray(10);
    $sum = null;
    for($i = 0; $i < $nums->getSize(); $i++){
        $nums[$i] = rand(1, 20); 
        $sum += $nums[$i];
    }
    echo "Текущий список чисел: ";
    foreach($nums as $n) { echo $n . ", ";}
    echo "<br><br>Среднее арифметическое чисел: ";
    echo $sum / 10; 
}

function task60(){
    ?>
    <h3>Задача 60</h3>
    <p>Дано целое число N и набор из N вещественных чисел. Вывести сумму и произведение чисел из данного набора.</p>
    <form method="post">
    <button type = "submit" name = "result"> Генерация чисел</button>
    </form><hr>
    <?php
    $count = rand(1, 6); 
    $array = [];
    $sum = null;
    $product = 1;

    for($i = 0; $i < $count; $i++){
        $array[$i] = rand(1, 10); 
        $sum += $array[$i];
        $product *= $array[$i];
    }

    echo "Текущее количество чисел: " . $count;
    echo "  Текущий список чисел: [";
    foreach($array as $n) { echo "$n ";}
    echo "]<br><br>";

    echo "Сумма чисел: $sum <br> Произведение чисел: $product";
}

function task61(){
    ?>
    <h3>Задача 61</h3>
    <p>Дано целое число N и набор из N ненулевых целых чисел. Вывести в том же порядке все четные числа из данного набора n K таких чисел.</p>
    <form method="post">
    <button type = "submit" name = "result"> Генерация чисел</button>
    </form><hr>
    <?php
    $count = rand(1, 6); 
    $array = new SplFixedArray($count);
    $countOffNumsFromList = null;

    for($i = 0; $i < $array->getSize(); $i++){
        $array[$i] = rand(1, 10); 
    }

    echo "Текущее количество чисел: " . $count;
    echo "  Текущий список чисел: [";
    foreach($array as $n) { echo "$n ";}
    echo "]<br><br> Четные числа из списка: "; 

    foreach($array as $n) { if($n % 2 == 0) { echo "$n, "; $countOffNumsFromList++; }}
    echo "<br>Количество четных чисел: $countOffNumsFromList";
}

function task62(){
    ?>
    <h3>Задача 62</h3>
    <p>Дано целое число N и набор из N ненулевых целых чисел. Вывести в том же порядке номера всех нечетных чисел из данного набора и количество K таких чисел.</p>
    <form method="post">
    <button type = "submit" name = "result"> Вывод решения</button>
    </form><hr>
    <?php
    $count = rand(1, 6); 
    $array = new SplFixedArray($count);
    $countOffNumsFromList = null;

    for($i = 0; $i < $array->getSize(); $i++){
        $array[$i] = rand(1, 10); 
    }

    echo "Текущее количество чисел: " . $count;
    echo "  Текущий список чисел: [";
    foreach($array as $n) { echo "$n ";}
    echo "]<br><br> Четные числа из списка: "; 

    foreach($array as $n) { if($n % 2 != 0) { echo "$n, "; $countOffNumsFromList++; }}
    echo "<br>Количество нечетных чисел: $countOffNumsFromList";
}
function task63(){
    ?>
    <h3>Задача 63</h3>
    <p>Даны целые числа K, N и набор из N целых чисел. Если в наборе присутствует число, меньшее K, то вывести True; в противном случае вывести False. </p>
    <form method="post">
    <button type = "submit" name = "result"> Вывод решения</button>
    </form><hr>
    <?php
    $n = rand(1, 20); 
    $k = rand(1, 20);
    $arrayN = new SplFixedArray($n);
    $countOffNumsFromList = null;
    $isContains = false;

    for($i = 0; $i < $arrayN->getSize(); $i++){
        $array[$i] = rand(1, 20); 
    }

    echo "Значение N: " . $n;
    echo "<br>Значение K: " . $k;
    echo "<br>Текущий список чисел: [";
    foreach($array as $n) { echo "$n ";}
    echo "]<br><br>"; 

    foreach($array as $n) { if($n == $k){$isContains = true;}}
    if($isContains == true){ echo "true"; } else { echo "false";}
    
}

function task64(){
    ?>
    <h3>Задача 64</h3>
    <p>Дан набор ненулевых целых чисел; признак его завершения — число 0. Вывести количество элементов в наборе. </p>
    <form method="post">
        Введите порядок чисел через пробел. Пример "1 2 3 4 0". Ноль совершает список.
        <input type = "text" name = "N"> <br>
        <button type = "submit" name = "result">Подтвердить</button>
    </form><hr>
    <?php
    $currentNum = $_POST["N"];
    $result = preg_split('/\s+/', trim($_POST["N"]));
    $count = 0;
    if(end($result) != 0){ echo "Вы не закончили список нулем. Ошибка."; }
    else{
        foreach($result as $n){
            if($n == "0") { break;}
            $count++;
        }

        echo "Количество чисел: $count";

    }

    
}

function task65(){
    ?>
    <h3>Задача 65</h3>
    <p>Дан набор ненулевых целых чисел; признак его завершения — число 0. Вывести сумму всех положительных четных чисел из данного набора. Если требуемые числа в наборе отсутствуют, то вывести 0. </p>
    <form method="post">
        Введите порядок чисел через пробел. Пример "1 2 3 4 0". Ноль совершает список.
        <input type = "text" name = "N"> <br>
        <button type = "submit" name = "result">Подтвердить</button>
    </form><hr>
    <?php
    $currentNum = $_POST["N"];
    $result = preg_split('/\s+/', trim($_POST["N"]));
    $summ = 0;
    $count = 0;
    if(end($result) != 0){ echo "Вы не закончили список нулем. Ошибка."; }
    else{
        foreach($result as $n){
            if($n == "0") { break;}
            if((int)$n % 2 == 0){ $summ += (int)$n; }
            $count++;
        }

        if($count == 0){ echo "0"; } else { echo "Сумма четных чисел: $summ"; }
    }

    
}

function task66(){
    ?>
    <h3>Задача 66</h3>
    <p>Дано целое число K и набор ненулевых целых чисел; признак его завершения — число 0. Вывести количество чисел в наборе, меньших K. </p>
    <form method="post">
        Введите порядок чисел через пробел. Пример "1 2 3 4 0". Ноль совершает список.
        <input type = "text" name = "N"> <br>
        Введите любое число K:
        <input type = "text" name = "K"> <br>
        <button type = "submit" name = "result">Подтвердить</button>
    </form><hr>
    <?php
    $currentNum = $_POST["N"];
    $num = $_POST["K"];

    $result = preg_split('/\s+/', trim($_POST["N"]));
    $count = 0;
    if(end($result) != 0){ echo "Вы не закончили список нулем. Ошибка."; }
    else{
        foreach($result as $n){
            if($n == "0") { break;}
            if((int)$n < (int)$num){ $count++;}
        }

        if($count == 0){ echo "0"; } else { echo "Количество чисел меньше K: $count"; }
    }

    
}

function task67(){
    ?>
    <h3>Задача 67</h3>
    <p>Дано целое число K и набор ненулевых целых чисел; признак его завершения — число 0. Вывести номер первого числа в наборе, большего K. Если таких чисел в наборе нет, то вывести 0. </p>
    <form method="post">
        Введите порядок чисел через пробел. Пример "1 2 3 4 0". Ноль совершает список.
        <input type = "text" name = "N"> <br>
        Введите любое число K:
        <input type = "text" name = "K"> <br>
        <button type = "submit" name = "result">Подтвердить</button>
    </form><hr>
    <?php
    $currentNum = $_POST["N"];
    $num = $_POST["K"];

    $result = preg_split('/\s+/', trim($_POST["N"]));
    $count = 0;

  

    if(end($result) != 0){ echo "Вы не закончили список нулем. Ошибка."; }
    else{
        foreach($result as $n){
            if($n == "0") { break;}
            $count++; 
            if((int)$n > (int)$num){
                break;
                }
        }

        if($count == 0){ echo "0"; } else { echo "Порядковый первого числа больше K: $count"; }
    }

    
}

function task68(){
    ?>
    <h3>Задача 68</h3>
    <p>Дано целое число K и набор ненулевых целых чисел; признак его завершения — число 0. Вывести номер последнего числа в наборе, меньшего K. Если таких чисел в наборе нет, то вывести 0. </p>
    <form method="post">
        Введите порядок чисел через пробел. Пример "1 2 3 4 0". Ноль совершает список.
        <input type = "text" name = "N"> <br>
        Введите любое число K:
        <input type = "text" name = "K"> <br>
        <button type = "submit" name = "result">Подтвердить</button>
    </form><hr>
    <?php
    if(!isset($_POST["N"], $_POST["K"])) { return; }
 
    $result = preg_split('/\s+/', trim($_POST["N"]));
    $k = (int)$_POST["K"];
    $position = 0;
    $lastIndex = 0;
 
    if(end($result) !== "0"){ echo "Вы не закончили список нулем. Ошибка."; }
    else{
        foreach($result as $n){
            if($n == "0") { break; }
            $position++;
            if((int)$n < $k){ $lastIndex = $position; }
        }
 
        echo "Номер последнего числа меньше K: $lastIndex";
    }
}
function task69(){
    ?>
    <h3>Задача 69</h3>
    <p>Дано целое число N и набор из N целых чисел. Вывести номера тех чисел в наборе, которые меньше своего левого соседа, и количество K таких чисел.</p>
    <form method="post">
        Введите числа через пробел. Пример "5 3 4 1 2".
        <input type = "text" name = "N"> <br>
        <button type = "submit" name = "result">Подтвердить</button>
    </form><hr>
    <?php
    if(!isset($_POST["N"])) { return; }
    $nums = preg_split('/\s+/', trim($_POST["N"]));
 
    $nums = array_map('intval', $nums);
    $n = count($nums);
    $indexes = [];
 
    for($i = 1; $i < $n; $i++){
        if($nums[$i] < $nums[$i - 1]){ $indexes[] = $i + 1; } // номера считаем с 1
    }
 
    echo "N = $n<br>Список чисел: [" . implode(" ", $nums) . "]<br><br>";
    echo "Номера чисел меньше левого соседа: " . (count($indexes) ? implode(", ", $indexes) : "нет");
    echo "<br>Количество K: " . count($indexes);
}
 
function task70(){
    ?>
    <h3>Задача 70</h3>
    <p>Дано целое число N и набор из N целых чисел. Вывести номера тех чисел в наборе, которые больше своего правого соседа, и количество K таких чисел.</p>
    <form method="post">
        Введите числа через пробел. Пример "5 3 4 1 2".
        <input type = "text" name = "N"> <br>
        <button type = "submit" name = "result">Подтвердить</button>
    </form><hr>
    <?php
    if(!isset($_POST["N"])) { return; }
    $nums = preg_split('/\s+/', trim($_POST["N"]));
 
    $nums = array_map('intval', $nums);
    $n = count($nums);
    $indexes = [];
 
    for($i = 0; $i < $n - 1; $i++){
        if($nums[$i] > $nums[$i + 1]){ $indexes[] = $i + 1; }
    }
 
    echo "N = $n<br>Список чисел: [" . implode(" ", $nums) . "]<br><br>";
    echo "Номера чисел больше правого соседа: " . (count($indexes) ? implode(", ", $indexes) : "нет");
    echo "<br>Количество K: " . count($indexes);
}
 
function task71(){
    ?>
    <h3>Задача 71</h3>
    <p>Дано целое число N и набор из N вещественных чисел. Проверить, образует ли данный набор возрастающую последовательность. Если образует, то вывести True, если нет — вывести False.</p>
    <form method="post">
        Введите числа через пробел. Пример "1.5 2 3.7 4".
        <input type = "text" name = "N"> <br>
        <button type = "submit" name = "result">Подтвердить</button>
    </form><hr>
    <?php
    if(!isset($_POST["N"])) { return; }
    $nums = preg_split('/\s+/', trim($_POST["N"]));
 
    $nums = array_map('floatval', $nums);
    $n = count($nums);
    $isIncreasing = true;
 
    for($i = 1; $i < $n; $i++){
        if($nums[$i] <= $nums[$i - 1]){ $isIncreasing = false; break; }
    }
 
    echo "N = $n<br>Список чисел: [" . implode(" ", $nums) . "]<br><br>";
    echo $isIncreasing ? "True" : "False";
}
 
function task72(){
    ?>
    <h3>Задача 72</h3>
    <p>Дано целое число N и набор из N вещественных чисел. Если данный набор образует убывающую последовательность, то вывести 0; в противном случае вывести номер первого числа, нарушающего закономерность.</p>
    <form method="post">
        Введите числа через пробел. Пример "9.5 7 4.2 1".
        <input type = "text" name = "N"> <br>
        <button type = "submit" name = "result">Подтвердить</button>
    </form><hr>
    <?php
    if(!isset($_POST["N"])) { return; }
    $nums = preg_split('/\s+/', trim($_POST["N"]));
 
    $nums = array_map('floatval', $nums);
    $n = count($nums);
    $breakIndex = 0;
 
    for($i = 1; $i < $n; $i++){
        if($nums[$i] >= $nums[$i - 1]){ $breakIndex = $i + 1; break; }
    }
 
    echo "N = $n<br>Список чисел: [" . implode(" ", $nums) . "]<br><br>";
    echo "Результат: $breakIndex";
}
 
function task73(){
    ?>
    <h3>Задача 73</h3>
    <p>Дано целое число N и набор из N целых чисел, содержащий по крайней мере два нуля. Вывести сумму чисел из данного набора, расположенных между первыми двумя нулями (если первые нули идут подряд, то вывести 0).</p>
    <form method="post">
        Введите числа через пробел (минимум два нуля). Пример "4 0 2 5 0 7".
        <input type = "text" name = "N"> <br>
        <button type = "submit" name = "result">Подтвердить</button>
    </form><hr>
    <?php
    if(!isset($_POST["N"])) { return; }
    $nums = preg_split('/\s+/', trim($_POST["N"]));
 
    $nums = array_map('intval', $nums);
    $n = count($nums);
    $zeros = [];
 
    for($i = 0; $i < $n; $i++){
        if($nums[$i] == 0){ $zeros[] = $i; }
        if(count($zeros) == 2){ break; }
    }
 
    if(count($zeros) < 2){ echo "В наборе должно быть минимум два нуля. Ошибка."; return; }
 
    $sum = 0;
    for($i = $zeros[0] + 1; $i < $zeros[1]; $i++){
        $sum += $nums[$i];
    }
 
    echo "N = $n<br>Список чисел: [" . implode(" ", $nums) . "]<br><br>";
    echo "Сумма между первыми двумя нулями: $sum";
}
?>
