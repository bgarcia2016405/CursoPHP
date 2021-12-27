<?php

class EnlacesPaginas{

    public static function EnlacesPaginasModel($enlaces){

        if($enlaces == "nosotros" || 
           $enlaces == "servicios" || 
           $enlaces == "contactenos"){
               $module = "views/modulos/".$enlaces.".php";
        }else if($enlaces == "index"){
                $module = "views/modulos/inicio.php";
        }else{
            $module = "views/modulos/inicio.php";
        }
        return $module;
    }
}

?>