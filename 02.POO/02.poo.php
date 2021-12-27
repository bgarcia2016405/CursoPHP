<?php

#CLASE:
#Una clase es un modelo que se utilizan para crear objetos que comparten un mismo comportamiento, estado e identidad

class Automovil{
    #PROPIEDADES:
    #Son las caracteristicas que puede tener un Objeto.
    
    public $marca;
    public $modelo;

    #METODO:
    #es el algoritmo asociado a un objeto que indica la capacidad de lo que éste pueda hacer.
    #la única difenecia entre método y función, es que mientras que llamamos método a alas funciones de una clase (en la POO), mientras que llamamos funciones, a los algoritmos de la programación
    #estructurada.

    public function mostrar(){
        echo "<p> Hola! soy un $this->marca, modelo $this->modelo </p>";
    }
}

#OBJETO
#Una entidad provista de métodos o mensajes a los cuales respnde propiedades con valores en concretos

$a = new Automovil();
$a -> marca = "Toyota";
$a -> modelo = "Corolla";
$a -> mostrar();

$b = new Automovil();
$b -> marca = "Hyundai";
$b -> modelo = "Accent Vision";
$b -> mostrar();

#Principios de la POO que se cumplen:

#ABSTRACCIÓN: Nuevos tipos de datos (el que tu quieras, tu lo creas)
#ENCAPSULACIÓN: Organizar el código en grupos lógicos
#OCULTAMIENTO: Ocultar detalles de implementación y exponer sólo los detalles que sean necesarios para el resto del sistema

?>