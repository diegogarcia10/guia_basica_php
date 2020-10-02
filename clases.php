<?php
    class Producto {
        public $nombre ;
        public $descripcion ;
        public $precio ;
    
    
        function precioIVA() {
        return $this->precio+$this->precio*0.13;
        }
    }

    $producto = new Producto();
    $producto->nombre="Coca Cola";
    $producto->descripcion="Bebida mundial buenisima con pupusas";
    $producto->precio=1;

    echo '<br> <b>Informacion la Clase Producto</b> <br>';
    echo '<br> <b>Nombre:</b>  '.$producto->nombre;
    echo '<br> <b>Descripcion:</b> '.$producto->descripcion;
    echo '<br> <b>Precio Real:</b>  $'.$producto->precioIVA();
?>
