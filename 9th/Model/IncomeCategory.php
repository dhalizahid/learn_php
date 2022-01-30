<?php 
	include('class.db.php');
	class IncomeCategory{
		private $name;

		public function store($data){
			$this->name = htmlspecialchars($data['name']);
			$Db= new db();
			$query = "INSERT INTO incames_catagory(name)";
			$query .= "VALUES('$this->name')";
			try {
				$Db->exceute($query); 
				$Db->close();
				}	
			catch (Exception $e) {
			return $e->getMessage();	
			}
			// $result = $Db->exceute($query);
			// if (!$result){
			// 	throw new Exception('Insert Error');
			// }
			
		}

		public function update($data,$id){

		}
		public function delete(){

		}
		public function deletebByPk($id){

		}
		public function getAll(){

		}
		public function getByPk($id){

		}
	}
 ?>