<?php 
	function checkPalindrome($value)
	{
		# code...
		$value1=strtolower($value);
		if($value1==(strrev($value1)))
		{
			return 1;
		}
		else 
			return 0;
	}


	echo "<form method ='POST'>
	Enter the text you want to check for palindrome: <br>
	<input type='text' name='val'><br>
	<br><button type='Submit' name='Sub'>SUBMIT</button><br>
	";

	if(isset($_POST['Sub']))
	{
		$str=$_POST["val"];
		echo "$str<br>";
		$flag=checkPalindrome("$str");
		if ($flag==1) {
			# code...
			echo "$str is palindrome<br>";
		}
		else
			echo "$str is not in palindrome<br>";

	}


 ?>