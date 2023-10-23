<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form action="calculadora.php" method="post">
        <input type="text" name="num1" required>
        <br>
        <input type="text" name="num2" required>
        <br>
        <br>
        <input type="submit" name="operar" value="sumar">
        <input type="submit" name="operar" value="restar">
        <input type="submit" name="operar" value="multipicar">
        <input type="submit" name="operar" value="dividir">
        <br>
        <br>
        <br>
        <a href="index.php"><h1>Salir</h1></a>

      
    </form>
</body>
</html>
<?php
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$operacion=$_POST['operar'];
$nombre="";
$resultado=0;

if($operacion =="sumar"){
    $resultado=$num1+$num2;
}
elseif($operacion =="restar"){
    $resultado=$num1-$num2;
}
elseif($operacion =="multipicar"){
    $resultado=$num1*$num2;
}
elseif($operacion =="dividir"){
    $resultado=$num1/$num2;
}
if($operacion =="sumar"){
    $nombre="suma";
}
elseif($operacion =="restar"){
    $nombre="resta";
}
elseif($operacion =="multipicar"){
    $nombre="multiplicacion";
}
elseif($operacion =="dividir"){
    $nombre="división";
}
echo "El resultado de la ".$nombre." es ".$resultado
?>