<?php 
class Operacion {
	protected $num1;
	protected $num2;

	public function __construct($num1, $num2){
		$this->num1 = $num1;
		$this->num2 = $num2;
	}
}
class Suma extends Operacion {
	public function getResultado(){
		return $this->num1 + $this->num2;
	}
 }
class Resta extends Operacion {
	public function getResultado(){
		return $this->num1 - $this->num2;
	}
 }
 class Multiplicacion extends Operacion {
	public function getResultado(){
		return $this->num1 * $this->num2;
	}
 }
 class Division extends Operacion {
	public function getResultado(){
		return $this->num1 / $this->num2;
	}
 }

 $oper1 = new Suma(40, 9);
 echo "\n La suma es: ".$oper1->getResultado();
 $oper2 = new Resta(10, 9);
 echo "\n La resta es: ".$oper2->getResultado();
 $oper3 = new Multiplicacion(10, 10);
 echo "\n La multiplicacion es: ".$oper3->getResultado();
 $oper4 = new Division(10, 5);
 echo "\n La division es: ".$oper4->getResultado();
?>
