<?php 
	/*web derectory code 755*/
	// out user don't modifay or access my drive or file 
	/*file derectory code 644*/
	// out user my file modifay or access my drive
	/*file derectory code 777*/
	// make deroctory	
	/*$result = mkdir('new1','755');
	  var_dump($result);*/
	  // schan file count data 
	  $result = scandir(new1);
	  var_dump($result);
