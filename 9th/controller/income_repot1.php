<?php
error_reporting(0);
include_once("wp-config.php");
extract($_POST);
$sql1=mysql_query("SELECT * FROM bookings WHERE `date` between '".$from_date."' AND '".$to_date."'");
echo "<table border='1'>
	  <tr>
		<th>id</th>
		<th>date</th>
		<th>start</th>
		<th>name</th>
		<th>email</th>
		<th>phone</th>
		<th>comments</th>
		<th>approved</th>
	 </tr>";
		while($row = mysql_fetch_array($sql1))
		{
		  echo "<tr>";
			  echo "<td>" . $row['id'] . "</td>";
			  echo "<td>" . $row['date'] . "</td>";
			  echo "<td>" . $row['start'] . "</td>";
			  echo "<td>" . $row['name'] . "</td>";
			  echo "<td>" . $row['email'] . "</td>";
			  echo "<td>" . $row['phone'] . "</td>";
			  echo "<td>" . $row['comments'] . "</td>";
			  echo "<td>" . $row['approved'] . "</td>";
		  echo "</tr>";
		}
echo "</table>";
?>