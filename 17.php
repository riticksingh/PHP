<?php
	echo "	<form method='POST'>
	Select Language you want to print \"hello\":<select name='Language'>
	  <option value=''>SELECT</option>
	  <option value='eng'>English</option>
	  <option value='german'>German</option>
	  <option value='french'>French</option>
	  <option value='hindi'>Hindi</option>
	</select>
	 <!--<br><input type='button' value='SUBMIT' name='sub'>-->
	<br><button type='Submit' name='Sub'>SUBMIT</button><br>

</form>";
	if (isset($_POST['Sub'])) {
		# code...e
		echo "hello yeah";
		$selectedLanguage=$_POST['Language'];
		echo "<br>In $selectedLanguage:";
		if ($selectedLanguage=="eng") {
			echo "HELLO<br>";
			# code...
		}
		elseif ($selectedLanguage=="german") {
			# code...
			echo "Hallo<br>";
		}
		elseif ($selectedLanguage=="french") {
			# code...
			echo "Bonjour<br>";
		}
		elseif ($selectedLanguage=="hindi") {
			# code...
			echo "नमस्ते<br>";
		}
	}
		// 	if (isset($_POST['sub'])) {
		// 	echo "hello yeah";
		// }


?>
