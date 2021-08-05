<?php
/*Dado un sueldo bruto de $50.000, restar el
 17% correspondiente a cargas sociales y mostrar
  en pantalla el sueldo neto, a través de una función*/

//Definicíon
function calcularNeto($bruto){
    return $neto = $bruto - ($bruto * 0.17);
}

//Uso
echo "El sueldo neto es " . "$" . calcularNeto(50000);
?>