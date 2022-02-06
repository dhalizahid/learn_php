<?php 
	// include('class.db.php');
	class Income{
		private $catagory_id;
		private $amount;	
		private $description;	
	    private	$incame_date;

		public function store($data){
			$this->catagory_id = htmlspecialchars($data['catagory_id']);
			$this->amount 	   = htmlspecialchars($data['amount']);
			$this->description = htmlspecialchars($data['description']);
			$this->incame_date = htmlspecialchars($data['incame_date']);

			$query = "INSERT INTO incames(catagory_id,amount,description,incame_date)";
			$query.= "VALUES('$this->catagory_id',$this->amount,'$this->description','$this->incame_date')";
			var_dump($query);
			// echo store($data);
			$Db = new db;
			try {
					$Db->exceute($query); 
				}	
			catch (Exception $e) {
				$Db->close();	
				return $e->getMessage();	
			}
		}
		public function update($data,$id){
			$this->catagory_id = $data['catagory_id'];
			$this->amount 	   = $data['amount'];
			$this->description = $data['description'];
			$this->incame_date = $data['incame_date'];

			$query = "UPDATE incames SET catagory_id ='$this->catagory_id',amount=$this->amount,description='$this->description',incame_date='$this->incame_date' WHERE id = $id";
			$Db = new db();
			try {
				$Db->exceute($query);
			} catch (Exception $e) {
				$e->getMessage();
			}
		}
		public function delete(){
			$Db 	= new db();
			$query 	= "DELETE FROM incames";
			$result = $Db->exceute($query);
			$Db->close();
			return $result;
		}
		public function deleteByPk($id){
			$Db 	= new db();
			$query	= "DELETE FROM incames WHERE id = $id";
			$result = $Db->exceute($query);
			$Db->close();
			return $result;
		}
		public function getAll(){
			$Db    = new db();
			$query = "SELECT incames.* ,incames_catagory.name AS category_id FROM incames JOIN incames_catagory ON incames.catagory_id=incames_catagory.id;";
			echo $query;
			$result=$Db->fetch_result($query);
			$Db->close();
			return $result;

		}
		public function getByPk($id){
			$Db 	= new db();
			$query 	= "SELECT * FROM incames WHERE id=$id";
			$result = $Db->fetch_result($query);
			$Db->close();
			return $result;
		}
		public function repot_search($from_date,$to_date){
			$Db = new db();
			$query = "SELECT * FROM incames WHERE incame_date BETWEEN '".$from_date."' AND '".$to_date."'";
			$result = $Db->fetch_result($query);
			// var_dump($query);
			return $result;
		}
	}
 ?>