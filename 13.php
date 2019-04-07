<?php
function printPattern($value)
{
	
	for ($i=0; $i < $value; $i++) { 
		for ($j=0; $j <=$i ; $j++) { 
			echo "* ";
			
		}
		echo "<br>";
	}
}
echo "Printing pattern like<br>
*<br>
* *<br>
* * *<br>
* * * *<br>";
echo "<form method ='POST'>
	Enter the number till which you want to print pattern: <br>
	<input type='integer' name='val'><br>
	<br><button type='Submit' name='Sub'>SUBMIT</button><br>
	";
	if (isset($_POST['Sub'])) {
		$x=$_POST['val'];
		printPattern($x);
	}
?>