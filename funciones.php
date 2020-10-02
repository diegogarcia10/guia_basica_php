<?php
    //Declaracion de una funcion que suma 2 numeros
    function suma($a,$b)
    {
        return $a+$b;
    }
    //Declaracion de una funcion que resta 2 numeros
    function resta($a,$b)
    {
        return $a-$b;
    }
    echo 'La suma de 4 + 5 es: '.suma(4,5);
    $c=3;$d=54;
    echo '<br>La suma de 3 + 54 es: '.suma($c,$d);
    echo '<br><br>La resta de 3 -5 es: '.resta(4,5);
    echo '<br>La resta de 3 - 54 es: '.resta($c,$d);
?>