<?php

class Persona{
    public $apellido;
    public $nombre;
    public $edad;
    

    public function agregar(){
        echo "<p>  $this->nombre, $this->apellido, $this->edad </p>";
    }
}

$newPersona = new Persona();
$newPersona -> nombre = "Byron";
$newPersona -> apellido = "García";
$newPersona -> edad = 19;
$newPersona -> agregar();

?>