<?php 
$arr=['2','1','10','9'];
echo "<br>Given array:<br>";
for ($i=0; $i < sizeof($arr); $i++) { 
	# code...
	echo "$arr[$i] <br> ";
}
echo "<br> Sorting the array..<br>";
echo "<br>Sorted array:<br>";
sort($arr);
for ($i=0; $i < sizeof($arr); $i++) { 
	# code...
	echo "$arr[$i] <br> ";
}
 ?>