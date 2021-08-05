<?php
/*Realizar una función que calcule el área de un rectangulo, la función recibe como parametro las medidas de una base y una altura*/
//Definición
function calcularAreaRect($base, $altura){
    return $base*$altura;
}

//uso
echo "El área es " . calcularAreaRect(100, 0.60);
echo " El área es " . calcularAreaRect(800, 300);

?>