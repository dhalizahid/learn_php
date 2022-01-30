<?php 
	/*--------------------------------------------------
	trait used case পিএইচপি ক্একটার বেশি ক্লাস কেউ রিসিভ করা যায় না এই সমস্যা সমাধানের জন্য আমরা ট্রেড ব্যবহার করব
	---------------------------------------------------*/
	trait nation{
		public $name;
		public function getNationName(){
			return $this->name;
		}
	}

	trait bangladesi
	{
		public $properties;
		public function getProperties(){
			return $this->properties;
		}
	}

	class cityzenkhulna
		// connect tow system 
		// system one
		/*use nation,bangladesi;*/
		// system tow
		use nation;
		use bangladesi;
	}
 ?>