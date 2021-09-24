<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios PHP</title>
</head>
<body>
    <div class="ejercicio6">
        <?php
        /* Escribe un programa que muestre los números de 5 al 15 utilizando un bucle for, y repitelo
        con un bucle while. Utiliza la etiqueta <br> para los saltos de línea. */
        for($i = 5; $i < 16; $i ++){
            echo "$i <br/>";
        }
        $j = 5;
        while ($j < 16){
            echo $j++."<br/>";
        }
        ?>
    </div>
    
</body>
</html>