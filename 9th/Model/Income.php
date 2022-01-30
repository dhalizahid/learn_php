<?php 
	include('class.db.php');
	class Income{
		private $catagory_id;
		private $amount;	
		private $description;	
	    private	$incame_date;

		public function store($data){
			$this->catagory_id =htmlspecialchars($data['catagory_id']);
			$this->amount= htmlspecialchars($data['amount']);
			$this->description = htmlspecialchars($data['description']);
			$this->incame_date=htmlspecialchars($data['incame_date']);

			$query = "INSERT INTO incames(catagory_id,amount,description,incame_date)";
			$query .= "VALUSE('$this->name',$this->amount,'$this->description','$this->incame_date')";
			$Db = new db;
			try {
				$Db->exceute($query); 
				}	
			catch (Exception $e) {
			return $e->getMessage();	
			}
			$Db->close();
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