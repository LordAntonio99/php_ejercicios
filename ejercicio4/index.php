<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios PHP</title>
</head>
<body>
    <div class="ejercicio4">
        <?php
        /* Escribe un programa que utilizando el valor de una variable muestre un mensaje diferente
        según su valor utilizando la instrucción if-else if-else
        Si el valor de 0 a 24, incluidos, mostrará “Primera parte”
        Si el valor de 25 a 49, incluidos, mostrará “Segunda parte”
        Si el valor de 50 a 74, incluidos, mostrará “Tercera parte”
        Si el valor de 100 a 75, incluidos, mostrará “Cuarta parte”
        Si el valor no está dentro del rango 0 a 100, incluidos, mostrará “valor no permitido”*/
        $valor = 0;
        if ($valor >= 0 && $valor <= 24){
            echo "Primera parte";
        } elseif ($valor >= 25 && $valor <= 49){
            echo "Segunda parte";
        } elseif ($valor >= 50 && $valor <= 74){
            echo "Tercera parte";
        } elseif ($valor >= 75 && $valor <= 100) {
            echo "Cuarta parte";
        } else {
            echo "Valor no permitido";
        }
        ?>
    </div>
    
</body>
</html>