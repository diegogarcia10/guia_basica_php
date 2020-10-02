<?php
    $primer = 20;
    $segundo =  5;
    $tercer =  25;
    $mayor =  0;
    echo '<b>ESTRUCTURA IF - ELSE</b><br>';
    echo 'LOS NUMEROS A COMPARAR: <b>'.$primer.', '.$segundo.' y '.$tercer.'</b><br>';
    if ($primer > $segundo) {
        $mayor = $primer;
    }
    else {
        $mayor = $segundo;
    }
    if ($mayor < $tercer) {
        $mayor = $tercer;
    }   
    echo 'EL NUMERO MAYOR ES: <b>'.$mayor.'</b><br>'; 
    echo '<br><b>Operador terniario</b><br>';
    $v = 1;
    $r = (1 == $v) ? 'Si' : 'No'; 
    $r = (3 == $v) ? 'Si' : 'No';
    echo (1 == $v) ? 'Si' : 'No' ;
    echo '<br><br><b>Estructura Switch</b><br>';
    /*Nos apoyamos de una funcion de php date() la cual;
      con el parametro "D" nos hace Una representación textual de un día, tres letras, Mon hasta Sun*/  
    $dia_actual = date("D");
    $nombre_dia = '';
    switch ($dia_actual):
        case 'Mon':
            $nombre_dia = 'Lunes';
            break;
        case 'Tue':
            $nombre_dia = 'Martes';
            break;
        case 'Wed':
            $nombre_dia = 'Miércoles';
            break;
        case 'Thu':
            $nombre_dia = 'Jueves';
            break;
        case 'Fri':
            $nombre_dia = 'Viernes';
            break;
        case 'Sat':
            $nombre_dia = 'Sabado';
            break;
        default:
            $nombre_dia = 'Domingo';
        break;
    endswitch;
    echo 'Hoy es: <b>'.$nombre_dia.'</b><br>';   
    
?>