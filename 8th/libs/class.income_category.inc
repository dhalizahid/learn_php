<?php
	class income_category
	{
		private $name;
		public function create($data){
			$this->name = $data['name'];
			$query = "INSERT INTO incames_catagory(name)";
			$query.= " VALUES('$this->name')";
			$db = new db();
			if (!$db->exceute($query)) {
				throw new Exception('create error');
			}
			$db->close();
		}
		public function update($data){

		}
		public function delete(){

		}
		public function delete_by_pk($id){

		}
		public function get_all(){
			$query = "SELECT * FROM incames_catagory";
			$db = new db();
			$result = $db->fetch_result($query);
			$db->close();
			return $result;
		}
		public function get_by_pk($id){

		}
	}
?>