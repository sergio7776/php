<?php
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);

 class Persona{
     public $dni;
     public $nombre;
     public $edad;
     public $nacionalidad;

     public function setNombre($nombre){
         $this->nombre = $nombre;
     }
 }

 class Alumno extends Persona{
     public $legajo;
     public $notaPortfolio;
     public $notaPhp;
     public $notaProyecto;

     public function __construct(){
         $this->notaPortfolio= 0.0;
         $this->notaPhp= 0.0;
         $this->notaPoyecto= 0.0;
     }
     public function imprimir(){
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Documento: " . $this->dni . "<br>";
        echo "legajo: " . $this->legajo . "<br>";
        echo "Promedio: " . number_format($this->calcularPromedio(), 2, ",", ".") . "<br>";
     }
     public function calcularPromedio(){
        $valor = $this->notaPortfolio + $this->notaPhp + $this->notaProyecto;

        return ($valor) / 3;
     }
 }

 class Docente extends Persona{

    public $especialidad;
    const ESPECIALIDAD_WP="Wordpress";
    const ESPECIALIDAD_ECO="Economía aplicada";
    const ESPECIALIDAD_BBDD="Base de datos";

     public function imprimir(){
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        echo "Especialidad: " . $this->especialidad . "<br><br>" . "<br>";
        
     }
     public function __destruct() {
         echo "Destruyendo el objeto" . $this->nombre . "<br>";
     }
 }

 // Programa
$alumno1 = new Alumno ();
$alumno1 ->nombre ="Juan Paz";
$alumno1 ->legajo =800;
$alumno1 ->dni =96084756;
$alumno1 ->notaPortfolio = 8;
$alumno1 ->notaPhp = 9;
$alumno1 ->notaProyecto =8.50;

$alumno2 = new  Alumno ();
$alumno2 ->nombre = "Micaela Ledesma";
$alumno2 ->legajo = 801;
$alumno2 ->notaPortfolio = 9;

$docente = new Docente();
$docente ->nombre = "Miguel Paz";
$docente ->dni = "30987123";
$docente ->edad = "33";
$docente ->especialidad = Docente::ESPECIALIDAD_BBDD;

$alumno1 ->imprimir();
$alumno2 ->imprimir();
$docente ->imprimir();
?>
