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
    "dni" => "33300123", "nombre" => "David Garcia", "bruto" => 85000.30
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
?>

<!--HTML-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado.pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Listado empledos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    
                    <thead>
                        <tr>
                            <th class="pt-5">DNI</th>
                            <th class="pt-5">Nombre</th>
                            <th class="pt-5">Sueldo</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                        foreach ($aEmpleados as $empleado) {
                        ?>
                            
                            <?php
                            function calcularNeto($bruto){
                                return $neto = $bruto - ($bruto * 0.17);
                            }?>
                            
                            <?php
                                <td> <?php echo($empleado["dni"]); ?></td>
                                <td> <?php echo strtoupper($empleado["nombre"]); ?> </td>
                                <td> <?php echo (calcularNeto($empleado["bruto"]));?> </td>
                            </tr>

                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>

</html>