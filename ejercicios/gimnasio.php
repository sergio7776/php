<?php
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);

 class Clase{
     public $nombre;
     public $entrenador;
     public $aAlumnos=array();

     public function asignarEntrenador();
     public function inscribirAlumno();
     public function imprimirListado();
 }

 class Persona{
     protected $dni;
     protected $nombre; 
     protected $correo; 
     protected $celular; 
 }

 class Alumno extends Persona{
     private $fechaNac;
     private $peso;
     private $altura;
     private $aptoFisico;
     private $presentismo;

     private function setFichaMedica();
 }

 class Entrenador extends Persona{
 }
?>