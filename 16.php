<?php
	$color=['white','greed','red'];
	for ($i=0; $i < sizeof($color); $i++) 
	{ 
		echo "$color[$i] ";
		if($i!=(sizeof($color)-1))
			echo ", ";

	}
	echo "<br>";
	sort($color);
	echo "<ul>";
	for ($i=0; $i < sizeof($color); $i++) 
	{ 
		echo "<li>$color[$i]</li>";
	}
	echo "</ul>";
?>