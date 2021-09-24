<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios PHP</title>
</head>
<body>
    <div class="ejercicio13">
        <!-- Escribe un script que simule el comportamiento de lanzar una moneda al aire y muestre una
        imagen con la cara o la cruz de la moneda.
        Utiliza: la función rand y un elemento de imagen <img> en HTML.-->
        <?php
            $num = rand(1,50);
            if ($num % 2 == 0){
                echo "<h2>Ha salido CARA!!</h2><br/>";
                echo "<img src=\"https://cdn.pixabay.com/photo/2016/01/22/21/10/dollar-1156662_960_720.png\" alt=\"Cara\" style=\"width:300px;height:300px;\">";
            } else {
                echo "<h2>Ha salido CRUZ!!</h2><br/>";
                echo "<img src=\"https://www.dado-virtual.com/img/cara-o-cruz/cruz.png\" alt=\"Cara\" style=\"width:300px;height:300px;\">";
            }
        ?>
        <br/>
        <a href="." class="myButton">Lanzar de nuevo</a>
        <style>
            .myButton {
                background:linear-gradient(to bottom, #707070 5%, #4d4d4d 100%);
                background-color:#707070;
                border-radius:42px;
                display:inline-block;
                cursor:pointer;
                color:#ffffff;
                font-family:Arial;
                font-size:17px;
                padding:10px 39px;
                text-decoration:none;
                text-shadow:0px 2px 0px #000000;
            }
            .myButton:hover {
                background:linear-gradient(to bottom, #4d4d4d 5%, #707070 100%);
                background-color:#4d4d4d;
            }
            .myButton:active {
                position:relative;
                top:1px;
}
    </style>

    </div>
    
    
</body>
</html>