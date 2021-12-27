<?php

#Varible Numérica

$numero = 5;
echo "Esto es una variable Número $numero<br>";
var_dump($numero);
echo "<br></br>";
#Variable texto
$palabra = "palabra";
echo "Esto es una varible texto $palabra<br>";
var_dump($palabra);
echo "<br></br>";

#Variable boleana
$boleana = true;
echo "Esto es una varible boleana $boleana<br>";
var_dump($boleana);
echo "<br></br>";

#Varibale Arreglo
$colores = array("rojo","amarillo");
echo "Esto es una varible arreglo: $colores[1]<br>";
var_dump($colores);
echo "<br></br>";

#Varibale Arreglo con propiedades
$verduras = array("verdura1"=>"lechuga", "verdura2"=>"cebolla");
echo "Esto es una varible arreglo con propiedades: $verduras[verdura1]<br>";
var_dump($verduras);
echo "<br></br>";

#Varibale Objeto
$frutas = (object)["fruta1"=>"pera","fruta2"=>"manzana"];
echo "Esto es una varible objeto: $frutas->fruta2<br>";
var_dump($frutas);
echo "<br></br>";



?>