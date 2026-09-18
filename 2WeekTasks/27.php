<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Перевод в метры</title>
    <link rel="stylesheet" href="firstStyle.css">
    
</head>
<body>
<?php
$choice = $_POST["choice"];
$f = $_POST["f"];


switch($choice)
{
    case 1:
        echo $f / 10 . " метров";
        break;
    case 2:
        echo $f * 1000 . " метров";
        break;
    case 3:
        echo $f . " метров";
        break;
    case 4:
        echo $f/1000 . " метров";
        break;
    case 5:
        echo $f / 100 . " метров";
        break;
    default:
        echo "ERROR";
        break;
}
?>
</body>
</html>