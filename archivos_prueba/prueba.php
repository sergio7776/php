<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
//file_put_contents
$contenido = file_get_contents("datos.txt");
$contenido = $contenido . "\nJuan Perez";
file_put_contents("datos.txt", $contenido);
*/

$archivo1 = fopen("datos.txt", "r");
if ($archivo1){
    while(($fila = fgets($archivo1)) == true){
        echo $fila;
    }
}

?>