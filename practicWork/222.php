<?php
$a=$_POST["ST"];
If ($a<500)
{
Echo "Скидки нет  "."<br>";
} else if ($a>=1000)
{
$res1= $a*5/100;
$res2=$a-$res1;
Echo "Вам со скидкой 5%  ". "$res2" . "<br>";
}


Else
{
$res3= $a*3/100;
$res4=$a-$res3;
Echo "Вам со скидкой 3%  ". "$res4" . "<br>";
}

?>
