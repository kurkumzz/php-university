<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Равносторонний треугольник</title>
    <link rel="stylesheet" href="firstStyle.css">
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>
<body>
<?php
$known = $_POST["known"] ?? "";
$value = $_POST["value"] ?? "";

if (!is_numeric($value) || $value <= 0) {
    echo "Неправильный ввод";
    exit;
}

$v = $value + 0; 

switch ($known) {
    case 1: 
        echo "Радиус вписанной: \\( \\dfrac{" . $v . "\\sqrt{3}}{6} \\)<br><br>";
        echo "Радиус описанной: \\( \\dfrac{" . $v . "\\sqrt{3}}{3} \\)<br><br>";
        echo "Площадь: \\( \\dfrac{" . ($v ** 2) . "\\sqrt{3}}{4} \\)";
        break;

    case 2: 
        echo "Сторона: \\( " . $v . "\\cdot 2\\sqrt{3} \\)<br><br>";
        echo "Радиус описанной: " . ($v * 2) . "<br><br>";
        echo "Площадь: \\( " . (3 * $v * $v) . "\\sqrt{3} \\)";
        break;

    case 3: 
        echo "Сторона: \\( " . $v . "\\sqrt{3} \\)<br><br>";
        if ($v / 2 == (int)($v / 2)) {
            echo "Радиус вписанной: " . ($v / 2) . "<br><br>";
        } else {
            echo "Радиус вписанной: \\( \\dfrac{" . $v . "}{2} \\)<br><br>";
        }
        echo "Площадь: \\( \\dfrac{" . (3 * $v * $v) . "\\sqrt{3}}{4} \\)";
        break;

    case 4: 
        echo "Сторона: \\( 2\\sqrt{\\dfrac{" . $v . "}{\\sqrt{3}}} \\)<br><br>";
        echo "Радиус вписанной: \\( \\sqrt{\\dfrac{" . $v . "}{3\\sqrt{3}}} \\)<br><br>";
        echo "Радиус описанной: \\( 2\\sqrt{\\dfrac{" . $v . "}{3\\sqrt{3}}} \\)";
        break;

    default:
        echo "Неправильный ввод";
        exit;
}
?>
</body>
</html>