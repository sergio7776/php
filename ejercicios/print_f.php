<?php
//Definición
function print_f($variable){
    if(is_array($variable)){
        foreach($variable as $item){
            $contenido .= $item . "\n";
        }
            file_put_contents("datos.txt", $variable);
    }else{
        //Entonces es string, guardo el contenido en el archivo "datos.txt"
        file_put_contents("datos.txt", $variable);
    }
}
//Uso
$aNotas = array(8,5,7,9,10);
$msg = "este es un mensaje";
print_f($aNotas);
?>