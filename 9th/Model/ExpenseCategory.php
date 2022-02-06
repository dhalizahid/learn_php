<?php 
	// include('class.db.php');
	class Expense{
		private $object;
		private $date;	
		private $taka;	
		public function store($data){
			$this->object = htmlspecialchars($data['object']);
			$this->date   = htmlspecialchars($data['date']);
			$this->taka   = htmlspecialchars($data['taka']);
			$Db = new db();
			$query = "INSERT INTO expense_category(object,`date`,taka)";
			$query.= "VALUES('$this->object','$this->date',$this->taka)";
			// echo $query;
			// echo store($data);
			try {
					$Db->exceute($query); 
				}	
			catch (Exception $e) {
				$Db->close();	
				return $e->getMessage();	
			}
		}
		public function update($data,$id){
			$this->object = $data['object'];
			$this->date   = $data['date'];
			$this->taka   = $data['taka'];
			$Db = new db();
			$query = "UPDATE expense_category SET object='$this->object',`date`='$this->date',taka=$this->taka WHERE id = $id";
			try {
				$Db->exceute($query);
			} catch (Exception $e) {
				$e->getMessage();
			}
		}
		public function delete(){
			$Db 	= new db();
			$query 	= "DELETE FROM expense_category";
			$result = $Db->exceute($query);
			$Db->close();
			return $result;
		}
		public function deleteByPk($id){
			$Db 	= new db();
			$query	= "DELETE FROM expense_category WHERE id = $id";
			$result = $Db->exceute($query);
			$Db->close();
			return $result;
		}
		public function getAll(){
			$Db    = new db();
			$query = "SELECT * FROM expense_category";
			$result=$Db->fetch_result($query);
			$Db->close();
			return $result;

		}
		public function getByPk($id){
			$Db 	= new db();
			$query 	= "SELECT * FROM expense_category WHERE id=$id";
			$result = $Db->fetch_result($query);
			$Db->close();
			return $result;
		}
	}
?>