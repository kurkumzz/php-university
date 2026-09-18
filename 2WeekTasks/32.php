<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Равнобедренный прямоугольный треугольник</title>
    <link rel="stylesheet" href="firstStyle.css">
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    
</head>
<body>
<?php
$known = $_POST["known"];
$value = $_POST["value"];

if(!is_numeric($value)) { echo "Неправильный ввод"; }

switch($known)
{
    case 1:
        echo "Гипотенуза: \\(" . $value . "\\sqrt{2}\\) <br><br>";
        if($value % 2 == 0){
            echo "Высота: \\(" . $value/2 . "\\sqrt{2}\\) <br><br>";
            echo "Площадь: \\(" . ($value**2)/2 . "\\sqrt{2}\\) <br><br>";
        } else{
            echo "Высота: \\( \\dfrac{" . $value . "\\sqrt{2}}{2} \\) <br><br>";
            echo "Площадь: \\( \\dfrac{" . $value**2 . "}{2} \\)";
        }
        break;
    case 2:
        if($value % 2 == 0){
            echo "Катет: \\(" . $value/2 . "\\sqrt{2}\\) <br><br>";
            echo "Высота: " . $value/2 . "<br><br>";
            if($value % 4 == 0){
                echo "Площадь: " . ($value**2)/2;
            }else{ 
                if((($value**2)/2) % 2 == 0){ echo "Площадь: " . $value/2; }
                else{ echo "Площадь: \\( \\dfrac{" . ($value**2)/2 . "}{2} \\)"; }
                }
        }else{
            echo "Катет: \\( \\dfrac{" . $value . "\\sqrt{2}}{2} \\) <br><br>";
            echo "Высота: \\( \\dfrac{" . $value . "}{2}\\) <br><br>";
            echo "Площадь: \\( \\dfrac{" . $value**2 . "}{4} \\)";
        }
        break;
    case 3:
        echo "Гипотенуза: " . $value * 2 . "<br><br>";
        echo "Катет: \\(" . $value . "\\sqrt{2}\\)" . "<br><br>";
        echo "Площадь: " . $value**2;
        break;
    case 4:
        $n = sqrt($value);
        $n1 = sqrt($value*2);

        if($n == (int)$n && $n1 == (int)$n1){
            echo "Гипотенуза: " . $n1  . "<br><br>";
            echo "Катет: " . $n1 . "<br><br>";
            echo "Высота: " . $n;

        } elseif($n1 != (int)$n1 && $n == (int)$n){
            echo "Гипотенуза: \\(\\sqrt{" . $value*2 . "}\\)" . "<br><br>";
            echo "Катет: \\(\\sqrt{" . $value*2 . "}\\)" . "<br><br>";
            echo "Высота: " . $n;


        }elseif($n1 == (int)$n1 && $n != (int)$n){
            echo "Гипотенуза: " . $n1 . "<br><br>";
            echo "Катет: " . $n1 . "<br><br>";
            echo "Высота: \\(\\sqrt{" . $value . "}\\)";

        }else{
            echo "Гипотенуза: \\(\\sqrt{" . $value*2 . "}\\)" . "<br><br>";
            echo "Катет: \\(\\sqrt{" . $value*2 . "}\\)" . "<br><br>";
            echo "Высота: \\(\\sqrt{" . $value . "}\\)";

        }

        break;
    default:
        echo "Неправильный ввод";
        exit;
}

?>
</body>
</html>