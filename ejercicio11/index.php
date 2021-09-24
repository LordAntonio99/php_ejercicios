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
        /* Dada una frase almacenada en una variable:
        ● muestra por pantalla la frase.
        ● Debajo muestra la frase en orden inverso. Utiliza un bucle.
        ● Muestra debajo el tamaño de la frase. El número de caracteres, contando espacios.
        ● Muestra la frase en mayúsculas utilizando una función. strtoupper()*/
        $array = ["Hola", "buenos", "dias", "que", "tal", "estas"];
        echo "La frase completa es:<br/>".implode(" ", $array);
        echo "<br/>Y parte del array:<br/>";
        echo print_r($array);
        echo "<br/>La frase en orden inverso es: <br/>";
        for ($i = (count($array)-1); $i >=0; $i--){
            echo "$array[$i]";
        };
        echo "<br/>La frase tiene ".strlen(implode(" ", $array))." caracteres.<br/>";
        echo "La frase en mayúsculas es: <br/>".strtoupper(implode(" ", $array));
        ?>        
    </div>
    
    
</body>
</html>