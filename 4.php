<?php 
	echo "<form method ='POST'>
	Enter the text you want to reverse: <br>
	<input type='text' name='val'><br>
	<br><button type='Submit' name='Sub'>SUBMIT</button><br>
	";

	if(isset($_POST['Sub']))
	{
		$str=$_POST["val"];
		echo "$str<br>";
		echo strrev($str);

	}


 ?>