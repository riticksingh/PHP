<?php 
	echo "<form method ='POST'>
	Enter the text you want to check for lowercase: <br>
	<input type='text' name='val'><br>
	<br><button type='Submit' name='Sub'>SUBMIT</button><br>
	";

	if(isset($_POST['Sub']))
	{
		$str=$_POST["val"];
		echo "$str<br>";
		$str1= strtolower($str);
		if($str==$str1)
		{
			echo "Given String $str is in lowercase<br>";
		}
		else
			echo "Given String $str is not in lowercase<br>";
	}


 ?>