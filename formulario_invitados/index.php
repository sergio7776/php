<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*LA FIESTA: 
1)Si pertecece a la lista $aInvitados(), 
deberá mostrar en pantalla "Bienvenid@ a la fietsta :)",
sino "No se encuentra en la lista de invitados"

2)si ingresa la frase secreta "verde" aparecerá en panalla: 
"Aquí tienes su pulsera", sino, mostrará "usted no tiene pase VIP"*/

//Lista de inviados admitidos
$aInvitados = array("pepe", "maca", "miley", "peter", "kelly", "andrea");

if ($_POST) {
    if (isset($_REQUEST["btnProcesar"])) {
        $invitado = $_REQUEST["txtInvitado"];

        if (in_array("$invitado", $aInvitados)) {
            //Si viene la imagen la almacenamos en la carpeta imagenes
            if ($_FILES["archivo"]["error"] === UPLOAD_ERR_OK) {
                $nombreAleatorio = date("Ymdhmsi") . rand(1000, 5000); //2021010420453710
                $archivo_tmp = $_FILES["archivo"]["tmp_name"];
                $extension = pathinfo($_FILES["archivo"]["name"], PATHINFO_EXTENSION);
                $nuevoNombre = "$nombreAleatorio.$extension";
                move_uploaded_file($archivo_tmp, "imagenes/" . $nuevoNombre);
            }

            $aMensaje = array("texto" => "Bienvenid@ a la fietsta :)", "estado" => "success");
        } else {

            $aMensaje = array("texto" => "No se encuentra en la lista de invitados", "estado" => "danger");
        }
    }

    if (isset($_REQUEST["btnVip"])) {
        $clave = $_REQUEST["txtClave"];

        if ($clave == "verde") {
            $aMensaje = array("texto" => "Aquí tienes su pulsera", "estado" => "success");
        } else {
            $aMensaje = array("texto" => "Used no tiene pase VIP", "estado" => "danger");
        }
    }
}

//Carga la variable con las imagenes de la carpeta
$aImagenes = scandir("imagenes");
unset($aImagenes[0]);
unset($aImagenes[1]);


?>

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
            <div class="col-12 pt-3">
                <h1>La fiesta</h1>
            </div>
            <?php if (isset($aMensaje)) : ?>
                <div class="col-12">
                    <div class="alert alert-<?php echo $aMensaje["estado"]; ?>" role="alert">
                        <?php echo $aMensaje["texto"]; ?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="col-12">
                <p>Complete el siguiente formulario</p>
            </div>
            <div class="col-6">
                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12">
                            <p>Ingrese su nombre: </p> 
                                <input type="text" name="txtInvitado" id="txtInvitado"><br><br>
                                <input type="file" name="archivo" class="form-control"><br><br>
                                <input type="submit" name="btnProcesar" id="btnProcesar" value="Procesar invitado" class="btn-primary"><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <p>Ingrese codigo secreto para aceso VIP: </p> 
                                <input type="password" name="txtClave" id="txtClave"><br><br>
                                <input type="submit" name="btnVip" id="btnVip" value="Procesar VIP" class="btn-primary">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-2">
                <table class="table table-hover border">
                    <tr>
                        <th>Imágenes</th>
                    </tr>
                    <?php foreach ($aImagenes as $imagen) : ?>
                        <tr>
                            <td><img src="imagenes/<?php echo $imagen; ?>" class="img-thumbnail"></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </main>
</body>

</html>