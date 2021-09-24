<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios PHP</title>
</head>
<body>
    <div class="ejercicio5">
        <?php
        /* Escribe un programa que dado un numero del 1 al 7 te devuelva el día de la semana. Si no
        es ninguno de esos números mostrará “Número incorrecto”. Se debe utilizar la instrucción
        switch o match.*/
        $dia = 1;
        switch ($dia){
            case (1):
                echo "Lunes";
                break;
            case (2):
                echo "Martes";
                break;
            case (3):
                echo "Miércoles";
                break;
            case (4):
                echo "Jueves";
                break;
            case (5):
                echo "Viernes";
                break;
            case (6):
                echo "Sábado";
                break;
            case (7):
                echo "Domingo";
                break;
            default:
                echo "Número incorrecto";
                break;
        };
        ?>
    </div>
    
</body>
</html>