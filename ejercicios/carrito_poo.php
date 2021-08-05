<?php
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);

 class Cliente{
    public $dni;
    public $nombre;
    public $correo;
    public $telefono;
    public $descuento;
   
    public function __construct(){
        $this->$descuento=0.0;
    }

    public function imprimir(){

    }
}

class Producto{
    public $cod;
    public $nombre;
    public $precio;
    public $descripcion;
    public $iva;
   
    public function __construct(){
        $this->$precio=0.0;
        $this->$iva=0.0;
    }

    public function imprimir(){

    }
}

class Carrito{
    public $cliente;
    public $aProductos;
    public $subTotal;
    public $total;
   
    public function __construct(){
        $this->$aProductos= array();
        $this->$subTotal=0.0;
        $this->$total=0.0;
    }

    public function cargarProducto(){

    }

    public function imprimirTicket(){

    }
}
//Programa
$cliente1 = new Cliente();
$cliente1->dni="34765456";
$cliente1->nombre="Bernabé";
$cliente1->correo="bernabé@gmail.com";
$cliente1->telefono="+54 11 8859-8686";
$cliente1->descuento= 0.05;
//$cliente1->imprimir();
//print_r($cliente1);

$producto1 = new Producto();
$producto1->cod="AB8767";
$producto1->nombre="Notebook 15\"HP";
$producto1->descripcion="Esta es una computadora HP";
$producto1->precio=30800;
$producto1->iva=21;
//$producto1->imprimir();

$producto2 = new Producto();
$producto2->cod="QWR579";
$producto2->nombre="Heladera Whirpool";
$producto2->descripcion="Esta es una heladera no froze";
$producto2->precio="76000";
$producto2->iva=10.5;
?>