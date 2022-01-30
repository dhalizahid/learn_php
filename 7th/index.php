<?php 

	class math{
		public $number1;
		public $number2;

		public function sum($number1,$number2){
			$this->number1=$number1;
			$this->number2=$number2;
			return $this->number1 + $this->number2;
		}
		// ------------
		// number 3 system protected key word used
		// ------------
		protected function sub($number1,$number2){
			$this->number1=$number1;
			$this->number2=$number2;
			return $this->number1 + $this->number2;
		}
		public function mul(){
			return $this->number1 * $this->number2;
		}
		public function div(){
			return $this->number1 / $this->number2;
		}

	}
	class subclass extends math{
		math::sub();

	// }
	$objmath = new math();
	/*----------------------------
	number 1 system * velues derectle input property than output
	----------------------------*/
	// $objmath->number1=10;
	// $objmath->number2=12;
	// ----------------------------
	// number 2 system * velues derectle input paramiter then function inner calclulation than output
	// ----------------------------
	$result = $objmath->sum(10,14);
	echo $result;
 ?>