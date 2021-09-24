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
        /* utiliza un bucle for-each para mostrar todos los valores del siguiente array asociativo de la
        siguiente forma:
        array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
        "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
        "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" =>
        "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon",
        "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London",
        "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague",
        "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria"
        => "Vienna", "Poland"=>"Warsaw");
        ROME is the capital of ITALY.
        [.... y el resto de ciudad del array asociativo ...]
        Ten en cuenta que tendrás que utilizar una función que pase a mayúsculas las palabras.*/
            $array = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
            "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
            "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" =>
            "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon",
            "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London",
            "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague",
            "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria"
            => "Vienna", "Poland"=>"Warsaw");
            foreach ($array as $k => $v) {
                echo strtoupper($array[$k])." is the capital of ".strtoupper($k)."<br/>";
            }
        ?>
    </div>   
</body>
</html>