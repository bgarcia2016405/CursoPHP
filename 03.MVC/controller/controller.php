<?php

class MvcController{


    #LLAMADA A LA PLANTILLA
    #---------------------------------------

    public function plantilla(){

        include "views/plantilla.php";
    }

    #INTERACCIÓN DEL USUARIO
    #------------------------------------------
    public function enlacesPaginasController(){

        if(isset($_GET["action"])){

            $enlaces = $_GET["action"];

        }else{

            $enlaces = "index";

        }

        $respuesta = EnlacesPaginas::EnlacesPaginasModel($enlaces);

        include $respuesta;
    }

}

?>