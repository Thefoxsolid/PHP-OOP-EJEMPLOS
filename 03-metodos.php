<?php include 'includes/header.php';

class MenuRestaurant {
    public $nombre = 'Nombre del Producto';
    public $precio = 0;

    public  function ObtenerProductoNombre()

    {
        echo " El Producto " . $this->nombre . " tiene un precio de " . $this->precio ;
    }

}


// Instanciar una clase
$bebida = new MenuRestaurant();
$bebida->nombre = "jugo de naranja";
$bebida->precio = 100;
$bebida->ObtenerProductoNombre();

echo "<br>";

$postre  = new MenuRestaurant();
$postre->nombre = " Pastel De Chocolate ";
$postre->precio = 150;
$postre->ObtenerProductoNombre();


echo "<br>";


$corte  = new MenuRestaurant();
$corte->nombre = " Rib Eye ";
$corte->precio = 550;
$corte->ObtenerProductoNombre();

