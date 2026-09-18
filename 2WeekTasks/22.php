<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Программа ВРЕМЕНА ГОДА</title>
    <link rel="stylesheet" href="firstStyle.css">
    
</head>
<body>
<?php
$n=$_POST["N"];

if( $n==1 || $n==2 || $n==12){
    echo "ЗИМА";
}elseif($n==3 || $n==4 || $n==5){
    echo "ВЕСНА";
}elseif ($n==6 || $n==7 || $n=8){
    echo "ЛЕТО";
}else{ echo "ОСЕНЬ"; }

?>
</body>
</html>