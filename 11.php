<?php 
echo "<form method ='POST'>
	Check whether the first sring contain the second string: <br>
	String 1:<input type='text' name='val1'><br>
	String 2:<input type='text' name='val2'><br>
	<br><button type='Submit' name='Sub'>SUBMIT</button><br>
	";

	if(isset($_POST["Sub"]))
	{	$str=$_POST['val1'];
		$substr=$_POST['val2'];
					// if (preg_match($substr, $str)) 
					// { 
					// 	echo "<br> $str does contain $substr <br>";
					// }
					// else
					// 	echo "<br> $str does not contain $substr <br>";	
		if(strpos($str, $substr))
		{
			echo "<br> $str does contain $substr <br>";
		}
		else
			echo "<br> $str does not contain $substr <br>";
	}
	?>