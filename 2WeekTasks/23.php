<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Программа МЕСЯЦЫ</title>
    <link rel="stylesheet" href="firstStyle.css">
    
</head>
<body>
<?php
$n=$_POST["N"];
IF (($n==2))
{
Echo "28 дней";
}
Else if (($n==4) or ($n==6) or ($n==9) or ($n==11))
{
Echo "30 дней";
}
Else
{
Echo "31 дней";
}
?>
</body>
</html>