<?php
    //Estructura FOR 
    $cantidad = 20;    
    echo 'Números impares del 1 al 20<br>';
    for ($i=1; $i<=$cantidad; $i++) { 
        if ($i % 2) {
            echo 'Número impar: '.$i.'<br>';
        }
    } 
    //Estructura While
    $cantidad2 = 1;
    echo '<br><br>Números pares del 1 al 20<br>';
    while ($cantidad2<=20) {
        if (!($cantidad2 % 2)) {
            echo 'Número par: '.$cantidad2.'<br>';
        }
        $cantidad2++;
    } 
    echo '<br><br>';
    //Estructura for-each
    $informacion = [];
    $informacion =[
        'Carlos',
        'Zulma',
        'Mario'
    ];
    foreach ($informacion as $valor) {
        print 'El nombre es: '.$valor.'<br>';
    }
    
    
   
?>
