<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function print_error($letras){
    $error = array('n', 'ñ', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');

    $i_error=0;
    
    foreach ($letras as $item){
        if(in_array($item, $error)){
            $i_error++;
        }
    }

    echo ($i_error . "/" . count($letras));
}

// Prueba 
$output_print = array("a", "a", "x", "m", "z");

print_error($output_print);
?>