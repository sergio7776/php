<?php
/*El docente desea obener un listado de sus alumnos donde se indique por cada
 uno de ellos sus notas, su promedio ndividual y de la cursada en general*/
 ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

 //Array
 $aAlumnos = array();
 $aAlumnos[]=array("nombre"=> "Juan Perez", "nota1" => 9, "nota2" => 8);
 $aAlumnos[]=array("nombre"=> "Ana Valle", "nota1" => 4, "nota2" => 9);
 $aAlumnos[]=array("nombre"=> "Gonzalo Roldán", "nota1" => 7, "nota2" => 6);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado.pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>

<body>
    <min class="container">
        <div class="row">
            <div class="col-12 my-5 text-center">
                <h1>Actas</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                <thead>
                        <tr>
                            <th class="pt-5">ID</th>
                            <th class="pt-5">Alumno</th>
                            <th class="pt-5">Nota 1</th>
                            <th class="pt-5">Nota 2</th>
                            <th class="pt-5">promedio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $pos=0;
                        $sumPromedios = 0;
                         foreach ($aAlumnos as $alumno):
                            $pos++;
                            $promedio = ($alumno["nota1"] + $alumno["nota2"]) / 2;
                            $sumPromedios += $promedio;
                        ?>
                            <tr>
                                <td><?php echo $pos; ?></td>
                                <td><?php echo $alumno["nombre"]; ?></td>
                                <td><?php echo $alumno["nota1"]; ?></td>
                                <td><?php echo $alumno["nota2"]; ?></td>
                                <td><?php echo $promedio; ?></td>
                            </tr>
                            <?php endforeach?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12 my-3">
                <h5>Promedio de la cursada: <?php echo number_format($sumPromedios / $pos, 2, "," , "."); ?></h5>
            </div>
        </div>
    </main>
</body>
</html>