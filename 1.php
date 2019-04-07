<?php

function Compare($value1,$value2,$value3)
{
	if(($value1>=$value2)&&($value1>=$value3))
	{
		echo "$value1 is greater";
	}
	elseif(($value2>$value1)&&($value2>$value3))
	{
		echo "$value2 is greater";
			
	}
	else
		echo "$value3 is greater";
}

echo "<form method='POST'>
	Value1:<input type='Integer' name='value1'><br>
	Value2:<input type='Integer' name='value2'><br>
	Value3:<input type='Integer' name='value3'><br>
	<button type='Submit' name='submit'>Submit</button><br>
</form>";
$val1=$_POST["value1"];
//echo "$val1<br>";

$val2=$_POST["value2"];
//echo "$val2<br>";

$val3=$_POST["value3"];
//echo "$val1<br>";

//if(isset($_POST['submit'])){
	Compare($val1,$val2,$val3);
//}

