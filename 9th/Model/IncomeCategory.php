<?php 
	// include('class.db.php');
	class IncomeCategory{
		private $name;
		
		public function store($data){
			$this->name = htmlspecialchars($data['name']);
			$Db= new db();
			$query  = "INSERT INTO incames_catagory(name)";
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
			$this->name=$data['name'];
			$query = "UPDATE incames_catagory SET name ='$this->name' WHERE id = $id";
			$Db = new db();
			try {
				$Db->exceute($query);
			} catch (Exception $e) {
				$e->getMessage();
			}
		}
		public function delete(){
			$Db = new db();
			$query = "DELETE FROM incames_catagory";
			$result = $Db->exceute($query);
			$Db->close();
			return $result;
		}
		public function deleteByPk($id){
			$Db = new db();
			$query="DELETE FROM incames_catagory WHERE id = $id";
			$result = $Db->exceute($query);
			$Db->close();
			return $result;
		}
		public function getAll(){
			$Db= new db();
			$query= "SELECT * FROM incames_catagory";
			$result=$Db->fetch_result($query);
			$Db->close();
			return $result;
		}
		public function getByPk($id){
			$Db = new db();
			$query = "SELECT * FROM incames_catagory WHERE id=$id";
			$result = $Db->fetch_result($query);
			$Db->close();
			return $result;
		}
	}
 ?>