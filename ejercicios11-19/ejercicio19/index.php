<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios PHP</title>
</head>
<body>
    <?php
        require 'funciones.php';

        for ($i = 0; $i <= 9; $i++){
            $array[$i] = rand(1,30);;
        };

        echo "La media: ".calcular_media($array);
        echo "<br/>El máximo es: ".calcular_maximo($array);
        echo "<br/>El mínimo es: ".calcular_minimo($array);
        echo "<br/>".imprimir_array($array);
    ?>
</body>
</html>