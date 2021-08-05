<?php
//permiso para ver errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//array
$aPacientes = array();

$aPacientes[] = array(
    "dni" => "33.765.012",
    "nombre" => "Ana Acuña",
    "edad" => 45,
    "peso" => 81.50
);
$aPacientes[] = array(
    "dni" => "23.684.012",
    "nombre" => "Gonzalo Bustamane",
    "edad" => 66,
    "peso" => 79
);
$aPacientes[] = array(
    "dni" => "23.684.385",
    "nombre" => "Juan Irraola",
    "edad" => 28,
    "peso" => 79
);
$aPacientes[] = array(
    "dni" => "236.684.385",
    "nombre" => "Beatriz Ocampo",
    "edad" => 50,
    "peso" => 79
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
                <h1>Listado de pacientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    
                    <thead>
                        <tr>
                            <th class="pt-5">DNI</th>
                            <th class="pt-5">Nombre y apellido</th>
                            <th class="pt-5">Edad</th>
                            <th class="pt-5">Peso(Kg)</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                        foreach ($aPacientes as $paciente) {
                        ?>

                            <tr>
                                <td> <?php print_r($paciente["dni"]); ?></td>
                                <td> <?php print_r($paciente["nombre"]); ?> </td>
                                <td> <?php print_r($paciente["edad"]); ?> </td>
                                <td> <?php print_r($paciente["peso"]); ?> </td>
                            </tr>

                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>

</html>