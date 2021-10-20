<?php
include("calculadora.php");//si usamos include, debemos quitar el action del form, dado que veríamos el resultado aquí
if(isset($_POST["button"])){
    $numero1=$_POST["num1"];
    $numero2=$_POST["num2"];
    $operacion=$_POST["operacion"];
    
    calcular($operacion); //le pasamos el paramétro 
}
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores matemáticos</title>
</head>

<body>
    <form name="form1" method="post" action="">
        <label for="num1">Número 1</label>
        <input type="text" name="num1" id="num1">
        <label for="num2">Número 2</label>
        <input type="text" name="num2" id="num2">
        <select name="operacion" id="operacion">
            <option value="Suma">Suma</option>
            <option value="Resta">Resta</option>
            <option value="Multiplicacion">Multiplicación</option>
            <option value="Division">División</option>
            <option value="Modulo">Módulo</option>
            <option value="Incremento">Incremento</option>
            <option value="Decremento">Decremento</option>
        </select>
        <button type="submit" name="button" id="button">Enviar</button>
    </form>
</body>

</html>