<!--HTML-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado.productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Números pares</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>Números</th>
                        </tr>
                    </thead>
                    <!--puedo agg codigo php "FOR" maybe-->
                    <tr>
                        <td>
                            <?php
                            for ($numero = 2; $numero <= 100; $numero+=2) {
                                echo $numero . "<br>";
                                if ($numero == 60) break;
                            }
                            ?>
                        </td>
                    </tr>
                </table>
            </div>

        </div>
    </main>
</body>