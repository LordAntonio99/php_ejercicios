<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios PHP</title>
</head>
<body>
    <div class="ejercicio18">
        <?php
        /* Escribe una función llamada calcular_media que reciba un array como parámetro de
        entrada y que devuelva la media de todos los valores que contiene.
        https://www.php.net/manual/es/functions.returning-values.php
        Escribe una función llamada calcular_maximo que reciba un array como parámetro
        de entrada y que devuelva cuál es el máximo valor del array.
        Escribe una función llamada calcular_minimo que reciba un array como parámetro
        de entrada y que devuelva cuál es el mínimo valor del array.
        Escribe una función llamada imprimir_array que reciba un array como parámetro de
        entrada y muestre su contenido en una tabla con dos columnas. La primera columna
        mostrará la posición del array y la segunda el valor que hay en esa posición. */
        
        for ($i = 0; $i <= 9; $i++){
            $array[$i] = rand(1,30);;
        };
        echo "Los numeros del array son: <br/>".implode(", ", $array);

        function calcular_media($array) {
            $media = array_sum($array)/count($array);
            return $media;
        };
        echo "<br/>La media del array es de: ".calcular_media($array);

        function calcular_maximo($array){
            $maximo = max($array);
            return $maximo;
        };
        echo "<br/>El valor máximo del array es de: ".calcular_maximo($array);

        function calcular_minimo($array){
            $minimo = min($array);
            return $minimo;
        };
        echo "<br/>El valor mínimo del array es de: ".calcular_minimo($array);
        
        function imprimir_array($array){
            echo "<table border=\"1\">";
            echo "
                    <tr>
                        <td>Posición</td>
                        <td>Valor</td>
                    </tr>";
            foreach($array as $k => $v){
                echo "
                        <tr>
                        <td>".$k."</td>
                        <td>".$array[$k]."</td>
                        </tr>";
            }
            echo "</table>";
        };
        imprimir_array($array);
        ?>
    </div>   
</body>
</html>