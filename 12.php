<?php
echo "<form method='POST'>
Enter the Birthdate :<input type='date' name='date'><br>
<button type='Submit' name='Sub'>SUBMIT</button>
";
	if (isset($_POST['Sub'])) 
		{
		$bdate=$_POST['date'];
		$tdate=date("Y-m-d");
		echo "<br>Birthdate is :$bdate<br>"; //yyyy-mm-dd
		echo "Today is :" . $tdate . "<br>";
			 //    $diff = strtotime($tdate) - strtotime($bdate); 
			 //    echo "$diff";
			 //    echo"<br>". ($diff/86400) . " days<br>";
			 // echo $diff->format("Difference between two dates: %R%a days"); 



		$daysdiff=date_diff(date_create($bdate),date_create($tdate));
		echo "<br>Days between your birthdate and today is: ".$daysdiff->format("%R%a days");
		echo "<br>Month between your birthdate and today is: ".$daysdiff->format("%m months");
		echo "<br>Year between your birthdate and today is: ".$daysdiff->format("%y years");

		}
		?> 