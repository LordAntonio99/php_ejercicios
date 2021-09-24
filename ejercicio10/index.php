<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios PHP</title>
</head>
<body>
    <div class="ejercicio9">
        <!-- Escribe un programa dado el valor de dos variables. Las sume y muestre el resultado por
        pantalla. -->
        <form action="." method="POST">
            <input type="text" id="num1" name="num1" value="1"/>
            <input type="text" id="num2" name="num2" value="1"/>
            <input type="submit" value="Sumar" />
        </form>
        <?php
        $num1 = $_POST["num1"] ?? 100;
        $num2 = $_POST["num2"] ?? 400;
         
        echo "<br/>La suma de $num1 y $num2 es: ".$num1+$num2;
        ?>        
    </div>
    
    
</body>
</html>