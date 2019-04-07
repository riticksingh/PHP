<?php  
// echo "<form method='POST'>
// 	Enter the number you want checkfor prime<br>
// 	<input type='Integer' name='val'><br>
// 	<br><button type='Submit' name='Sub'>SUBMIT</button><br>
// 	</form><br>

// ";
				function primeCheck($number){ 
				    if ($number == 1) 
				    return 0; 
				    for ($i = 2; $i <= $number/2; $i++){ 
				        if ($number % $i == 0) 
				            return 0; 
				    } 
				    return 1; 
				} 
				   
				$number = 2; 
				$flag = primeCheck("$number"); 
				if ($flag == 1) 
				    echo "Prime"; 
				else
				    echo "Not Prime";
// if(isset($_POST["Sub"]))
// {
// 	echo "hello";
// 	$value=$_POST["val"];
// 	echo "$value";
// 	$ctr=0;
// 	for ($i=1; $i < $value; $i++) { 
// 		if ($value/$i==0) {
// 			echo "for hello";
// 			$ctr++;
// 		}
// 	}
// 	if($ctr==1)
// 	{
// 		echo "hello if ";
// 		echo "$value is Prime number";
// 	}
// 	else
// 	{
// 		echo "hello else " ;
// 		echo "$value is not a Prime number";
// 	}
// }
?>