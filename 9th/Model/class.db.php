<?php
	class db{
		private $host = 'localhost';
		private $user = 'root';
		private $pass = '';
		private $db   = 'parsonal_wallet';

		private $connection;

		public function __construct(){
			$this->connection = new mysqli($this->host,$this->user,$this->pass,$this->db);
			if ($this->connection->connect_errno) {
				throw new Exception('Data base connection error'.$this->connection->connect_errno);
				exit();
			}
		}
		public function exceute($query){
			// var_dump($query);
			$result = mysqli_query($this->connection,$query);
			if (!$result) {
				throw new Exception('Error exceuting query');
			}
			else{
				return true;
			}
		}

		public function close(){
			mysqli_close($this->connection);
		}

		public function fetch_result($query){
			$result = mysqli_query($this->connection,$query);
			if (!$result) {
				throw new Exception('Error in fetching result');
			}
			else{
				while ($row = mysqli_fetch_array($result)) {
					$data[]=$row;
				}
				return $data;
			}
		}
	}
?>