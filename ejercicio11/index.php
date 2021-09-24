<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios PHP</title>
</head>
<body>
    <div class="ejercicio11">
        <?php
        /* El juego de FizzBuzz. Muestra del 1 al 30 el resultado del juego FizzBuzz. Se mostrará el
        número por pantalla, salvo cuando el número sea múltiplo de 3 que se mostrará “Fizz”, o
        cuando sea múltiplo de 5 se mostrará “Buzz'', cuando sea múltiplo de 3 y 5 se mostrará
        “FizzBuzz”.*/
        for ($i = 1; $i <= 30; $i ++){
            if ($i % 3 == 0){
                echo "Fizz<br/>";
            } elseif ($i % 3 == 0) {
                echo "Buzz<br/>";
            } else {
                echo $i."<br/>";
            }
        }
        ?>        
    </div>
    
    
</body>
</html>