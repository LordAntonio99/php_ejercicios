<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios PHP</title>
</head>
<body>
    <div class="ejercicio8">
        <?php
        /* Escribe un programa que dado una altura dibuje el numero de pisos de *. Tendrás que
        utilizar bucles anidados. */
        $simbolo = "*";
        $longitud = 5;
        for ($i = 1; $i <= $longitud ; $i ++){
            echo str_repeat($simbolo, $i)."<br\>";
        }
        ?>
    </div>
    
</body>
</html>