<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Изи калькулятор</title>
    <link rel="stylesheet" href="firstStyle.css">
    
</head>
<body>
<?php
$choice = $_POST["choice"];
$f = $_POST["f"];
$s = $_POST["s"];

switch($choice)
{
    case 1:
        echo $f + $s;
        break;
    case 2:
        echo $f - $s;
        break;
    case 3:
        echo $f * $s;
        break;
    case 4:
        echo $f / $s;
        break;
    default:
        echo "ERROR";
        break;
}
?>
</body>
</html>