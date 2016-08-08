<?php
	echo "<table width='100%' border='1' bgcolor='#ffd700'>";
		echo "<tr>";
			echo "<td><a href='../home.php'>home</a></td>";
		echo "</tr>";
		echo "</table>";

	echo "<h2>BollyWood</h2>";
	
	echo "<h3>";
	echo "<table>";
	for($i=2010;$i<=2015;$i++)
	{
		
		echo "<tr><td><b></b><a href='./movie.php?year=".urlencode($i). "'>$i</a></td></tr>";
		
	}
	
	echo "</table>";
	echo "</h3>";
	
?>