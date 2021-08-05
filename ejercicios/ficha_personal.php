<?php
$fecha = date("d/m/y");
$nombre = "Sergio Blanco";
$edad = 20;
$apeliculas = array("volver al futuro", "un día despues de mañana", "titanic")
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>Ficha personal</title>
</head>
<body>
    <main class="container">
    <div class="col-12 text-center py-5">
        <h1>Ficha personal</h1>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-hover border">
                <tbody>
                    <tr>
                        <th>Fecha:</th>
                        <td><?php echo  $fecha?></td>
                    </tr>
                    <tr>
                        <th>Nombre y apellido:</th>
                        <td><?php echo $nombre?></td>
                    </tr>
                    <tr>
                        <th>Películas favoritas</th>
                        <td><?php echo $apeliculas[0];?><br>
                            <?php echo $apeliculas[1];?><br>
                            <?php echo $apeliculas[2]?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </main>
</body>
</html>