<?php
    //Declaracion del arreglo
    $primer_arreglo = [];
    //Inserción de datos por su indice
    $primer_arreglo[0] = 'Hola';
    $primer_arreglo[1] = 'Mundo';
    echo 'Mensaje de bienvenida: <b>'.$primer_arreglo[0].' '.$primer_arreglo[1].'</b><br>';
    echo '<br><br>';
    print_r($primer_arreglo);
    echo '<br><br>';
    //podemos modificar el nombre de los indices(clave) de un array
    //Este es un array asociativo 
    $array = [
        "foo" => "bar",
        "bar" => "foo",
    ];
    //podemos imprimir un dato del arreglo por su clave 
    echo $array['foo']."<br><br>";
    print_r($array);
   
    
?>