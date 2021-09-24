<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios PHP</title>
</head>
<body>
    <div class="ejercicio10">
        <!-- Escribe un programa que dada la altura y la base calcule su área y muestre el siguiente
        mensaje: 
        El área del rectángulo de altura 2 y anchura 4 es 8. -->
        <form action="." method="POST">
            <input type="text" id="altura" name="altura" value="Altura"/>
            <input type="text" id="anchura" name="anchura" value="Anchura"/>
            <input type="submit" value="Calcular" />
        </form>
        <?php
        $altura = $_POST["altura"] ?? 2;
        $anchura = $_POST["anchura"] ?? 4;
         
        echo "<br/>El área del rectángulo de altura $altura y anchura $anchura es ".$altura*$anchura.".";
        ?>        
    </div>
    
    
</body>
</html>