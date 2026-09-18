<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Перевод в киллограмы</title>
    <link rel="stylesheet" href="firstStyle.css">
    
</head>
<body>
<?php
$choice = $_POST["choice"];
$f = $_POST["f"];


switch($choice)
{
    case 1:
        echo $f;
        break;
    case 2:
        echo $f / 1000000 . " киллограм";
        break;
    case 3:
        echo $f / 1000 . " киллограм";
        break;
    case 4:
        echo $f * 1000 . " киллограм";
        break;
    case 5:
        echo $f * 100 . " киллограм";
        break;
    default:
        echo "ERROR";
        break;
}
?>
</body>
</html>