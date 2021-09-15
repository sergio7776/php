<?php
function calcularNeto($bruto){
    return $sueldoNeto = $bruto - ($bruto * 0.1 + 0.2 + 0.5 + 0.5);
}

//Uso
echo "El sueldo neto es " . "$" . calcularNeto(60000);
?>