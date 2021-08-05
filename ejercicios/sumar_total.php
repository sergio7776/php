<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aProductos = array();
$aProducto[] = array(
    "nombre" => "Smart TV 55\"4K UHD",
    "marca" => "Hitachi",
    "modelo" => "554KS20",
    "stock" => 60,
    "precio" => 58000
);
$aProducto[] = array(
    "nombre" => "Samsung Galaxy A30 Blanco",
    "marca" => "Samsung",
    "modelo" => "Galaxy A30",
    "stock" => 0,
    "precio" => 22000
);
$aProducto[] = array(
    "nombre" => "Aire Acondicionado Split Inverter Frío/Calor Surrey 2900F",
    "marca" => "Surrey",
    "modelo" => "553AIQ1201E",
    "stock" => 5,
    "precio" => 45000
);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Listado de productos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Stock</th>
                            <th>Precio</th>
                            <th>Acción</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                        $suma = 0;
                        for($contador = 0; $i < count($aProductos); $contador++){
                        ?>
                            <tr>
                                <td><?php echo $aProducto[$contador]["nombre"]; ?></td>
                                <td><?php echo $aProducto[$contador]["marca"]; ?></td>
                                <td><?php echo $aProducto[$contador]["modelo"]; ?></td>
                                <td><?php echo $aProducto[$contador]["stock"] == 0? "No hay stock" : ($aProducto[0]["stock"] > 10 ? "Hay stock" : "poco stock"); ?></td>
                                <td>$<?php echo $aProducto[$contador]["precio"]; ?></td>
                                <td><a class="btn btn-primary">Comprar</a></td>
                            </tr>
                        <?php 
                            $suma += $aProductos[$contador]["precio"];
                            } ?>
                        
                    </tbody>

                </table>
                <h3></h3><?php ?>
            </div>
        </div>
    </main>

</body>

</html>