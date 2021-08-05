<?php

class persona {
    private $nombre;
    private $apellido;
    private $edad;

    function __construct($nombre, $apellido, $edad)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    function __get($propiead){
        if(property_exists($this, $propiedad)){
            return $this->propiedad;
        }
    }

    function __set($propiedad, $valor){
        if(property_exists($this, $propiedad)){
            return $this->$propiedad = $valor;
        }
    }

    function mayorEdad(){
        return $this->edad >= 18;
    }

    function nombreCompleto(){
        return $this->nombre . "" . $this->apellido;
    }


}

$persona = new persona("Fernando", " Ureña", 29);

if($persona->mayorEdad()){
    echo $persona->nombreCompleto(). " es mayor de edad";
}else{
    echo $persona->nombreCompleto(). " no es mayor de dad";
}

?>