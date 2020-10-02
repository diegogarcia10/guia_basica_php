<?php

    //EXPLICACION GENERAL: PARA DECLARAR VARIABLES DE CUALQUIER TIPO SE UTILIZA EL SIMBOLO "$"
    
    //Estas son variables de tipo string
    //Para concatenar cadena de carateres se ocupa el . 
    $primer_string = 'ROBERTO';
    $segundo_string = ' MARTINEZ';
    $primer_entero = 27;
    echo 'Resultado de concatenar dos variables string: '.$primer_string.$segundo_string.'<br>';
    echo 'Resultado de concatenar una variable string e integer:'.$segundo_string.$primer_entero.'<br>';

    //Estas son variables de tipo enteras
    $primer_entero = 18;
    $segundo_entero = -18;
    $tercer_entero = 12;
    $sumatoria_entera = $primer_entero + $tercer_entero;
    echo '<br>La sumatoria entre las dos variables enteras es de: '.$sumatoria_entera;
    $resta_entera = $segundo_entero - $tercer_entero;
    echo "<br>La diferencia entre las dos variables enteras es de: <b>$resta_entera</b>";

    //Estas son variables de tipo float o double 
    $primer_flotante = (float) 18.69;
    $segundo_flotante = (float) 0.12;
    $sumatoria_flotante = $primer_flotante + $segundo_flotante;
    echo '<br><br>La sumatorio entre las dos variables flotantes es de: '.$sumatoria_flotante;

    //Estas son variables de tipo boolean
    $primer_boolean = true;
    $segundo_boolean =  false;
    echo '<br><br>Valor verdadero: '.$primer_boolean.'<br>';
    echo 'Valor falso: '.$segundo_boolean * $primer_boolean.'<br>';   
   
?>