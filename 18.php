<?php
	function Fibonacci($number){ 
      
    if ($number == 0) 
        return 0;     
    else if ($number == 1) 
        return 1;     
    else
        return (Fibonacci($number-1) +  
                Fibonacci($number-2)); 
} 
echo "<form method ='POST'>
	Enter the n for print n fibonacci series: <br>
	<input type='integer' name='val'><br>
	<br><button type='Submit' name='Sub'>SUBMIT</button><br>
	";
	if (isset($_POST['Sub'])) {
		$x=$_POST['val'];

for ($counter = 0; $counter < $x; $counter++){   
    echo Fibonacci($counter),' ';
	}
}
?>