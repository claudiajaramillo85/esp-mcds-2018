<?php 
# Programacion Lineal
# ------------------
$a = 20;
$b = 30;
$c = $a + $b;
echo "La sumas es:".$c;

# Programacion Estructurada
# ------------------
function sumar($a, $b) {
	return $a+$b;
}
echo "La suma es".sumar(20, 30);

# Programacion Orientada a Objetos
# ------------------
class Suma {
	private $a;
	private $b;
	public function getSuma () {

		return $this->a + $this->b;
	}
	public function setSuma ($a, $b){
		$this->a = $a;
		$this->b = $b;
	}
}
	$s1 = new Suma;
	$s1->setSuma(20, 30);
	echo "La suma es: ".$s1->getSuma();
 ?>