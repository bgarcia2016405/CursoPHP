<?php
#El INDEX: en él mostraremos la salida de las vistas al usuario y también a traves de él enviaremos las distintas acciones que el usuario envíe al usuario.

#require() establece que el código del archivo invocado es requerido, es decir, obligatorio para el funcionamiento del programa. por ello, si el archivo especificado en la funcón require() no se encuentra saltará un error "PHP fatal error" y el programa PHP se detendrá.

#La versión require_once() funciona de la misma forma que sus respectivo, salvo que, al utilizar la versión _once, se impide la carga de un mismo archivo más de una sola vez

require_once "controller/controller.php";
require_once "models/model.php";

$mvc = new MvcController();
$mvc -> plantilla();

?>