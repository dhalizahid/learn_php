<?php
	class income{
		private $catagory_id;
		private $amount;	
		private $description;	
	    private	$incame_date;

	    public function create($data){
	    	$this->catagory_id = htmlspecialchars($data['catagory_id']);
	    	$this->amount 	   = htmlspecialchars($data['amount']);
	    	$this->description = htmlspecialchars($data['description']);
	    	$this->incame_date = htmlspecialchars($data['incame_date']);
	    	$query = "INSERT INTO incames(catagory_id,amount,description,incame_date)";
	    	$query .= "VALUES('$this->catagory_id',$this->amount,'$this->description','$this->incame_date')";
	    	$Db = new db();
	    	if (!$Db->exceute($query)) {
	    		throw new Exception('Create Error');
	    	}
	    	$Db->close();
	    }
	    public function update($id,$data){

	    }
	    public function delete(){

	    }
	    public function delete_by_pk($id){

	    }
	    public function get_all(){

	    }
	    public function get_by_pk($id){

	    }
	}

?>