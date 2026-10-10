<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Решение функции. Шаг 0.5 </title>
    <link rel="stylesheet" href="firstStyle.css">
    
</head>
<body>
<?php
$num = $_POST["num"];
$count = 0;  #счетчик
for ($i = 1; $i <= $num; $i++ )
{
  if ( $num % $i == 0 )     #если остаток от деления равен 0, то очередное число - делитель
      {
    $count=$count+1;
      }
}
if ($count<=2) {echo  "число простое";}
else { echo  "число непростое";} 

?>
</body>
</html>
