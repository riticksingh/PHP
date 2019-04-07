<?php
function printEvenNumbers($value)
{
		
	$ctr=0;
	for ($i=1; $i <10001 ; $i++) { 
		if($i%2==0)
		{
			if($ctr==$value)
				break;
			echo "$i ";
			$ctr++;
		}
	}
}

echo "<form method ='POST'>
	Enter the n for print first n even numbers: <br>
	<input type='integer' name='val'><br>
	<br><button type='Submit' name='Sub'>SUBMIT</button><br>
	";
	if (isset($_POST['Sub'])) {
		$x=$_POST['val'];
		printEvenNumbers("$x");
	}
?>
