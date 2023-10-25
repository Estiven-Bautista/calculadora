<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Calculadora2.php" method="post">
    <h1>Calculadora</h1>
    <input type="text" name="num1">
    <select name="operaciones" id="">
        <option value="suma" name="+">+</option>
        <option value="resta" name="-">-</option>
        <option value="multiplicacion" name="*">X</option>
        <option value="division" name="/">/</option>
    </select>
    <input type="text" name="num2" id="">
    <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$resultado = 0;
$operacion = $_POST['operaciones'];
if(isset($_POST ['submit']) ){

switch ($operacion) {
    case 'suma':
        $resultado=$num1+$num2;
        break;

        case 'resta':
            $resultado=$num1-$num2;
            break;
            case 'multiplicacion':
                $resultado=$num1*$num2;
                break;
                case 'division':
                    if($num2 != 0){
                        $resultado=$num1/$num2;
                    }
                    else{
                        $resultado="DivisorZeroError";
                        break;
                    }
        
                }
            }
            echo "el resultado de la ".$operacion. " es " .$resultado;
?>