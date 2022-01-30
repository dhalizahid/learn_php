<?php
	class  db{
		private $host = 'localhost';
		private $user = 'root';
		private $pass = '';
		private $db   = 'parsonal_wallet';

		private $connection;

		public function __construct()
		{
			$this->connection = new mysqli($this->host,$this->user,$this->pass,$this->db);
			if ($this->connection->connect_errno)
			{
				throw new Exception('Database connection error! '.$this->connection->connect_errno);
				exit();
			}
		}
		public function exceute($query)
		{
			// var_dump($query);
			$result = mysqli_query($this->connection,$query);
			if (!$result)
			{
				throw new Exception('Error executing query');
			}
			else
				return true;
		}
		public function fetch_result($query)
		{
			$result = mysqli_query($this->connection,$query);
			if ($result) {
				while ($row = mysqli_fetch_array($result))
				{
					$data[] = $row;
				}
				return $data;
			}
			else{
				return array();
			}
		}
		public function close()
		{	
			// prosedeural system
			// mysqli_close($this->connection);
			// oop system
			$this->connection->close();
		}
	}