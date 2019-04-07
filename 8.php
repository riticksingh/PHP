<?php 
echo "<form method ='POST'>
	Enter the text you want to remove whitespaces: <br>
	<input type='text' name='val'><br>
	<br><button type='Submit' name='Sub'>SUBMIT</button><br>
	";
		if(isset($_POST['Sub']))
		{
			$str=$_POST["val"];
			echo "Without trim :$str<br>";
			$string = str_replace(' ','',$str);
			echo "With Trim :$string"; 

		}
 ?>