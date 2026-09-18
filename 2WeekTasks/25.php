<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Программа ОЦЕНКИ</title>
    <link rel="stylesheet" href="firstStyle.css">
    
</head>
<body>
<?php
$n=$_POST["N"];
If ($n==1)
{
Echo " плохо ";
}
Else if ($n==2)
{
Echo " неудовлетворительно ";
}
Else if ($n==3)
{
Echo " удовлетворительно ";
}
Else if ($n==4)
{
Echo " хорошо ";
}
Elseif ($n==5)
{
Echo "отлично ";
} else{
    echo "ERROR";
}

?>
</body>
</html>