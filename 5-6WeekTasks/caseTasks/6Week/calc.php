<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
    <link rel ="stylesheet" href ="firstStyle.css">
</head>
<body>
<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$operation = $_POST["operation"];

if($num1 == "" || $num2 == ""){
    echo "Ошибка: введите оба числа";
} else if(!is_numeric($num1) || !is_numeric($num2)){
    echo "Ошибка: нужно вводить только числа";
} else {

    switch($operation){
        case "plus":
            $result = $num1 + $num2;
            echo "$num1 + $num2 = $result";
            break;
        case "minus":
            $result = $num1 - $num2;
            echo "$num1 - $num2 = $result";
            break;
        case "multiply":
            $result = $num1 * $num2;
            echo "$num1 * $num2 = $result";
            break;
        case "divide":
            if($num2 == 0){
                echo "Ошибка: деление на ноль невозможно";
            } else {
                $result = $num1 / $num2;
                echo "$num1 / $num2 = $result";
            }
            break;
        default:
            echo "Ошибка: неизвестная операция";
    }
}
?>
<br><br>
<a href="calcForm.html">Назад</a>
</body>
</html>
