<?php
//permiso para ver errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*indicaciones: Dada una lista de empleados, 
mostrar cada uno de ellos con su sueldo neto
 en una tabla html, con una precisión de dos 
 decimales y nombres en mayuscula.*/

//array
$aEmpleados = array();

$aEmpleados[] = array(
    "dni" => "33300123",
    "nombre" => "David Garcia",
    "bruto" => 85000.30
);
$aEmpleados[] = array(
    "dni" => "40874456",
    "nombre" => "Ana Del Valle",
    "bruto" => 90000
);
$aEmpleados[] = array(
    "dni" => "67567565",
    "nombre" => "Andres Perez",
    "bruto" => 100000
);
$aEmpleados[] = array(
    "dni" => "75744545",
    "nombre" => "Victoria Luz",
    "bruto" => 70000
);

//Definicíon
function calcularNetogo($aE){
    $bruto = ($empleado["bruto"]);
    return $neto = $bruto - ($bruto * 0.17);
} 

foreach ($aEmpleados as $empleado) {
echo ($empleado["dni"]) . "<br>";
echo ($empleado["nombre"]) . "<br>"; 
echo "$" . calcularNeto($) . "<br>"; 

}
//echo ($empleado["bruto"]) . "<br>"; 
?>


