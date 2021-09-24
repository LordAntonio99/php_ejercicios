<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios PHP</title>
</head>
<body>
    <div class="ejercicio15">
        <?php
        /* Escribe un script PHP que realice las siguientes acciones:
        ● Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
        ● Una vez que ha inicializado el array, imprimir todos los valores que almacena.
        ● Mostrar el valor medio
        ● Muestra el valor mas alto y el más bajo
        Resuelve el ejercicio usando bucles for, while, do-while y for-each
        Después utiliza la función sort y rsort para mostrar los valores en orden creciente y
        decreciente.*/
            for ($i = 0; $i <= 9; $i++){
                $array[$i] = rand(1,30);;
            }
            print_r($array);
            $medio = array_sum($array)/count($array);
            sort($array);
            echo "<br/>El valor medio del array es de $medio<br/>";
            echo "El valor mas alto del array es ".max($array)." y el mas bajo es ".min($array).".<br/>";
            echo "Los valores en orden creciente son: <br/>".implode(" ", $array).".<br/>";
            rsort($array);
            echo "Y ordenados de forma decreciente son: <br/>".implode(" ",$array).".<br/>";

        ?>
    </div>   
</body>
</html>