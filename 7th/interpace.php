<?php 
	interface math{
		/*------------------------------------------------------
		function used case same method and paramiter limitation
		-------------------------------------------------------*/
		public function sum($number1,$number2){

		}
		public function sub($number1,$number2){

		}
		public function mul($number1,$number2){

		}
		public function div($number1,$number2){

		}
	}

	/*-------------------------------------------------
	implements used case একটি কেলাস অন্য একটি কেলাস কি একবারের বেশি এক্সটেন্ট করতে পারেনা সেজন্য আমরা ইম্প্লেমেন্ট ব্যবহার করব
	--------------------------------------------------*/
	class mathmeticalcalculation implements math
	{
		public sub($number1,$number2)
		{
			return $number1 + $number2;
		}
	}
 ?>