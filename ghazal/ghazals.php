<?php
	echo "<table width='100%' bgcolor='#ffd700'>";
		echo "<tr>";
			echo "<td><a href='../home.php'>home</a>-><a href='./ghazals.php'>Ghazal</a></td>";
		echo "</tr>";
		echo "</table>";
	echo "<h2>Ghazal</h2>";
	$con=mysqli_connect('localhost','root','') or die(mysqli_error());
	$db=mysqli_select_db($con,"test");
	
	$query="select distinct artist from ghazal";
	$res=mysqli_query($con,$query)or die(mysqli_error($con));
	$no=mysqli_num_rows($res);
		
	echo "<table>";
	if($no>0)
	{
		while( list($artist)=mysqli_fetch_array($res) )
		{
		echo "<tr>";
		echo "<td>";
			echo "<a href='song.php?artist=".urlencode($artist)."'>$artist</a>";
		echo "<td>";
		echo "<tr>";


		}
	}
	echo "</table>";
	mysqli_close($con);

		
?>
