<?php 
	class person{
		public $name;
		public $age;
		public $job;
		function __construct(){
			
		}
		public function showname(){
			echo $this->name;
		}
		public function getAge(){
			echo $this->age;
		}
		public function getjob(){
			echo $this ->job;
		}
	}
	// $nam = new parson('zahid');
	// echo "<br>";
	// $nam->hello();
 ?>