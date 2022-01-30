<?php 
	include('libs/class.db.inc');
	include('libs/class.income.inc');
	if (isset($_POST['submit']) && $_POST['submit'] == 'Add Income') {
		$data = [
			'catagory_id' => $_POST['catagory_id'],
				'amount'	   => $_POST['amount'],
				'description'  => $_POST['description'],
				'incame_date'  => $_POST['incame_date'],
		];
		$Income = new income();

		try {
			$Income->create($data);
		} catch (Exception $e) {
			echo $e->getmessage();
			
		}
	}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 </head>
 <body>
 	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
 		<input type="text" name="catagory_id" placeholder="Add income purpose">
 		<input type="number" name="amount" placeholder="Income Amount">
 		<input type="text" name="description" placeholder="Income Description">
 		<input type="date" name="incame_date">
 		<input type="submit" name="submit" value="Add Income">
 	</form>
 </body>
 </html>