<?php 
function fact($value)
{
	# code...
	echo "<br>$value<br>";
	$val=1;
	for ($i=1; $i <=$value ; $i++) { 
			$val=$val*$i;
	}
	echo "Factorial is ";
	echo "$val";
}

echo "<Form method='POST'>
	Enter the Number you want to get factorial<br>
	Number<input type='Integer' name='num'><br>
	<br><button type='Submit' name='Submit'>SUBMIT</button><br>
";


if(isset($_POST["Submit"]))
	{
		$numb=$_POST["num"];
		fact("$numb");
		
		} 


 ?>