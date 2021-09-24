<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios PHP</title>
</head>
<body>
    <div class="ejercicio17">
        <?php
        /* Escribe una función que reciba un número como parámetro de entrada y que
        imprima su tabla de multiplicar. */
        function tablaMultiplicar($num){
            echo "La tabla de multiplicar de $num es:";
            echo "<table border=\"1\">";
            for ($i = 1; $i <= 10; $i ++){
                echo 
                "<tr>
                    <td>$num x $i</td>
                    <td>".$num*$i."</td>
                </tr>";
            };
            echo "</table>";
        };
        tablaMultiplicar(56);
        ?>
    </div>   
</body>
</html>