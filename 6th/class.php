<?php 
	class south_tree{
		public $treeName1;
		public $treeName2;
		public $treeNsme3;
		public $treeName4;
		public $treeName5;

		function set_tree_name1($treeName1){
			$this->treeName1 = $treeName1;
		}
		function get_tree_name1(){
			return $this->treeName1;
		}

		function set_tree_name2($treeName2){
			$this->treeName2=$treeName2;
		}
		function get_tree_name2(){
			return $this->treeName2;
		}
		function set_tree_name3($treeName3){
			$this->treeName3=$treeName3;
		}
		function get_tree_name3(){
			return $this->treeName3;
		}
		function set_tree_name4($treeName4){
			$this->treeName4=$treeName4;
		}
		function get_tree_name4(){
			return $this->treeName4;
		}
		function set_tree_name5($treeName5){
			$this->treeName5=$treeName5;
		}
		function get_tree_name5(){
			return $this->treeName5;
		}
		function total_tree(){
			echo $this->get_tree_name1();
			echo "<br>";
			echo $this->get_tree_name2();
			echo "<br>";
			echo $this->get_tree_name3();
			echo "<br>";
			echo $this->get_tree_name4();
			echo "<br>";
			echo $this->get_tree_name5();
		}
	}
// sengle inharetance 
	class north_tree extends south_tree{
		public $treeName6;
		public $treeName7;
		public $treeNsme8;
		public $treeName9;
		public $treeName10;

		public function set_tree_name6($treeName6){
			$this->treeName6 = $treeName6;
		}
		public function get_tree_name6(){
			return $this->treeName6;
		}

		public function set_tree_name7($treeName7){
			$this->treeName7=$treeName7;
		}
		public function get_tree_name7(){
			return $this->treeName7;
		}
		public function set_tree_name8($treeNsme8){
			$this->treeNsme8=$treeNsme8;
		}
		public function get_tree_name8(){
			return $this->treeNsme8;
		}
		public function set_tree_name9($treeName9){
			$this->treeName9=$treeName9;
		}
		public function get_tree_name9(){
			return $this->treeName9;
		}
		public function set_tree_name10($treeName10){
			$this->treeName10=$treeName10;
		}
		public function get_tree_name10(){
			return $this->treeName10;
		}
		public function output_tree(){
			echo $this->get_tree_name6();
			echo "<br>";
			echo $this->get_tree_name7();
			echo "<br>";
			echo $this->get_tree_name8();
			echo "<br>";
			echo $this->get_tree_name9();
			echo "<br>";
			echo $this->get_tree_name10();
		}
	}
	// multi inharitance
	// multi label
	class flowers extends north_tree{
		public $flower1;
		public $flower2;
		public function set_flowers_name1($flower1){
			$this->flower1=$flower1;
		}
		public function get_flowers_name1(){
			return $this->flower1;
		}
		public function set_flowers_name2($flower2){
			$this->flower2=$flower2;
		}
		public function get_flowers_name2(){
			return $this->flower2;
		}
		public function output_flowers(){
			echo $this->get_flowers_name1();
			echo "<br>";
			echo $this->get_flowers_name2();
		}
	}
	// south tree gate
	$all_output = new flowers();
	echo"List of trees in the south of Bangladesh:<br>";
	$all_output->set_tree_name1('Sundori');
	$all_output->set_tree_name2('Geya');
	$all_output->set_tree_name3('Segun');
	$all_output->set_tree_name4('Keora');
	$all_output->set_tree_name5('Goran');
	$all_output->total_tree();
	echo "<br>";
	
	// north tree get
	echo "List of trees in the north of Bangladesh:<br>";
	$all_output->set_tree_name6('Sul');
	$all_output->set_tree_name7('Gojal');
	$all_output->set_tree_name8('Ucalectiv');
	$all_output->set_tree_name9('Keora');
	$all_output->set_tree_name10('Goran');
	$all_output->output_tree();
	echo "<br>";
	// flowers output
	echo "List of flowers in Bangladesh:<br>"; 
	$all_output->set_flowers_name1('Rose');
	$all_output->set_flowers_name2('Joba');
	$all_output->output_flowers();
	

 ?>