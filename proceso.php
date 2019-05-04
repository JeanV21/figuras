<?php
extract($_POST);
class operacion {
	public function circulo ($num1,$num2){
		$resultado = 3.14*($num2*$num2);
		echo "su resultado es $resultado";
	}
	public function triangulo ($num1,$num2){
		$resultado = $num1*$num2/2;
		echo "su resultado es $resultado";
	}
	public function rectangulo ($num1,$num2){
		$resultado = $num1*$num2;
		echo "su resultado es $resultado";
	}
	}
	if(isset($_REQUEST['boton'])){
		$obj = new operacion();
		$obj ->$operacion($num1,$num2);
	}

