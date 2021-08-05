<?php
//permiso para ver errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_POST){/* Es postback?   seria un click en enviar */
    //pritnt_r($_POST); //Imprime los datos del sumbit del formulario  
    //pritnt_r($_GET); // Imprime los datos de la query string
    //print_r($_REQUEST); // Imprime los dos a la vez
    $usuario = $_REQUEST["txtUsuario"];
    $clave = $_REQUEST["txtClave"];

    if($usuario != ""){

        header("Location: acceso-confirmado.php");
    }else{
        $mensaje="Válido solo para usuarios";
    }

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1>Formulario</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            <?php if (isset($mensaje) && $mensaje != ""){
                echo '<div class="alert alert-danger" role="alert">' . $mensaje . "</div>";}?>
                <form action="" method="POST">
                    <div>
                        <label for="txtUsuario">Usuario: <input type="text" name="txtUsuario" id="txtUsuario" placeholder="Ingrese su usuario" class="form-control"></label>
                    </div>
                    <div>
                        <label for="txtClave">Clave: <input type="password" name="txtClave" id="txtClave" placeholder="Ingrese su clave" class="form-control"></label>
                    </div>
                    <div>
                        <button type="submit" name="btnEnviar" class="btn btn-primary mt-3">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>