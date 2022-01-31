<?php include 'includes/header.php';

    class MenuRestaurant {
        public $nombre = 'Nombre del Producto';
        public $precio = 0;

        public  function getNombre()
        {
            return $this->nombre;
        }

        /**
         * Get the value of precio
         */
        public function getPrecio()
        {
                return $this->precio;
        }
    }

$bebida = new MenuRestaurant();
$bebida->nombre = "jugo de narajana";
$bebida->precio = 30;
echo $bebida->getNombre();


echo"<br>";

$postre = new MenuRestaurant();
$postre->nombre = "Pastel de Chocolate";
$postre->precio = 100;
echo $postre->getNombre();