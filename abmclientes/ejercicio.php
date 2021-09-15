<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function contar($letras){
    $cantidad=0;
    foreach ($letras as $item){
        $cantidad++;
    }
    return $cantidad;
}

$aReal = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'ñ', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x' 'y' 'z');

if(in_array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', $aReal)){
    echo "existe real";
}else{
    echo contar($aReal); 
}
?>