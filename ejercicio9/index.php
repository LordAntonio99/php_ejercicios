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
        <form action="." method="POST">
            <input type="text" id="num1" name="num1" value="Numero 1"/>

        </form>
        <?php
        /* Escribe un programa dado el valor de dos variables. Las sume y muestre el resultado por
        pantalla.*/
        $var1 = "*";
        $longitud = 5;
        for ($i = 1; $i <= $longitud ; $i ++){
            echo str_repeat($simbolo, $i)."<br\>";
        }
        ?>
    </div>
    
</body>
</html>