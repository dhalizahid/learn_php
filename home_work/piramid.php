<?php
// Php code to demonstrate
// star pattern

// Function to demonstrate
// printing pattern
function pypart($n)
{
	
	// Outer loop to handle number
	// of rowsn in this case
	for ($i = 0; $i < $n; $i++)
	{
		
		// inner loop to handle
		// number of columns
		// values changing acc.
		// to outer loop
		for($j = 0; $j <= $i; $j++ )
		{
			
			// Printing stars
			echo "* ";
		}

		// ending line after
		// each row
		echo "<br>";
	}
}

	// Driver Code
	$n = 10;
	pypart($n);
?>
