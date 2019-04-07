<?php 
	
	function sumOfFirstNDigit($value)
	{
		# code...
		echo "The sum till first $value Digits is: <br>";
		$x=0;
		for ($i=1; $i <= $value; $i++) { 
			# code...

			$x=$x+$i;
		}
		echo "$x";
	}

	echo "<form method ='POST'>
	Enter the number till which you want to get sum: <br>
	<input type='integer' name='val'><br>
	<br><button type='Submit' name='Sub'>SUBMIT</button><br>
	";
	if (isset($_POST["Sub"])) {
		# code...
		$x=$_POST["val"];
		sumOfFirstNDigit("$x");
	}
?>