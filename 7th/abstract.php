

<?php 
namespace app\abstract;
	/*----------------------------------------
	abstract used case  আমরা প্রথমে এক্সেস  মডিফাই হিসেবে ব্যবহার করছে পাবলিক-প্রাইভেট প্রোটেক্টেড
	প্রতিটা এসকেএফ আলাদা আলাদাভাবে কন্ট্রোল করছে
	কিন্তু অ্যাপস ট্রাক এর কাজ হচ্ছে পুরো ক্লাস টা কে কন্ট্রোল করা
	----------------------------------------*/
	abstract class math{
		public $number1;
		public $number2;
		public function sum($number1,$number2){
			$this->number1=$number1;
			$this->number2=$number2;
			return $this->number1 + $this->number2;
		}
	}
	$objmath = new math();
	$result = $objmath->sum(10,15);
	echo $result;	
 ?>