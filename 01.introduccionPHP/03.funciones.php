<?php

#Funciones sin parametros


function saludo(){
    echo "Hola<br>";
}

function despedida($adios){
    echo $adios."<br>";

}

function retorno($retornar){
    return $retornar;

}


#llamada de funciones
saludo();
despedida('Bye');
echo retorno("retornar")

?>