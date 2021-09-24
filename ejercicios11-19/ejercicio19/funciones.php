<?php
    function calcular_media($array) {
        $media = array_sum($array)/count($array);
        return $media;
    };
    function calcular_maximo($array){
        $maximo = max($array);
        return $maximo;
    };
    function calcular_minimo($array){
        $minimo = min($array);
        return $minimo;
    };
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
?>