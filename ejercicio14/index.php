<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios PHP</title>
</head>
<body>
    <div class="ejercicio14">
        <?php
        /* Escribe un script PHP que realice las siguientes acciones:
        ● Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
        ● Una vez que ha inicializado el array, imprimir todos los valores que almacena. */
                for ($i = 0; $i <= 9; $i++){
                    $array[$i] = rand(1,30);;
                }
            print_r($array);
        ?>
    </div>   
</body>
</html>