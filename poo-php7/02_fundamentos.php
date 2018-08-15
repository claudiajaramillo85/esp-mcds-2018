<?php 

# Clase: Conjunto de Atributos y Metodos
class Animal {
	# Atributos: Propiedades del Objeto
	public $nombre;
	public $edad;
	public $peso;
	#Metodos: Funcionalidad del Objeto
	public function correr(){
		echo "\nEsta Corriendo...";
	}
	public function comer(){
		echo "\nEsta Comiendo...";
	}
	public function dormir(){
		echo "\nEsta Durmiendo...";
	}
}
# Instanciando el Objeto Animal
$an1 = new Animal;
$an1->correr();
$an1->comer();
$an1->dormir();
?>