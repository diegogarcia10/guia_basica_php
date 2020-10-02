<?php

    //Declaracion del arreglo
    $primer_arreglo = [];
    //Insersion de datos por su indice
    $primer_arreglo[0] = 'Hola';
    $primer_arreglo[1] = 'Mundo';
    //Declaracion del arreglo2
    $primer_arreglo2 = [];
    //Insersion de datos por su indice
    $primer_arreglo2[0] = 'IGF115';
    $primer_arreglo2[1] = 'PRN315';
    //Podemos meter un arreglo dentro de otro arreglo de la siguiente manera
    $variable=['Arreglo1'=>$primer_arreglo,'Arreglo2'=>$primer_arreglo2];
    //json_encode es una funcion php para codificar un arreglo en formato json facilmente
    printf(json_encode($variable));
    

    
?>