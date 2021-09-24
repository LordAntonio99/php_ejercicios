<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios PHP</title>
</head>
<body>
    <div class="ejercicio7">
        <?php
        /* Escribe un programa que dado el valor de una variable dibuje un tablero cuadrado de
        ajedrez. Utiliza las etiquetas <table> <tr> <td> y la propiedad bgcolor=”#FFFFFF” o
        bgcolor=#000000 */
        $ancho = 10;
            echo "<table border=\"1\">";
            for ($i = 1; $i <= $ancho; $i++){
                echo "<tr>";
                    for($g = 1; $g <= $ancho; $g++){
                        if ($i % 2 == 0){
                            if ($g % 2 == 0){
                                echo "<td height=\"100\" width=\"100\" bgcolor=\"#000\"></td>";
                            } else {
                                echo "<td height=\"100\" width=\"100\" bgcolor=\"#FFF\"></td>";
                            }
                        } else {
                            if ($g % 2 == 0){
                                echo "<td height=\"100\" width=\"100\" bgcolor=\"#FFF\"></td>";
                            } else {
                                echo "<td height=\"100\" width=\"100\" bgcolor=\"#000\"></td>";
                            }
                        }
                    }
                echo "</tr>";

            }
            echo "</table>";
        ?>
    </div>
    
</body>
</html>