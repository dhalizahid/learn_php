<?php 
	function print_info(array $info){
		$color='pink';	
		echo "<table bgcolor='$color' border='3'"."bordercolor='black' cellpadding='1'"."cellsping='0'>";
		foreach($info as $key => $value){
			echo '<tr><td>'.($key).'</td><td>'.$value.'</td></tr>';
		}
		echo '</table>';
	}
	$my_info = array('name'=> 'zahid','age'=>'20','gender' => 'male','job'=>'Nogor solution IT','hove'=>'cricket programming');
	print_info($my_info);
 ?>