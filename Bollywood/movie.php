<?php
	
	if(isset($_GET['year']))
	{	$year=$_GET['year'];
		echo "<table width='100%' bgcolor='#ffd700'>";
		echo "<tr>";
			echo "<td><a href='../home.php'>home</a>-><a href='./bollywood.php'>Bollywood</a></td>";
		echo "</tr>";
		echo "</table>";
		echo "<h2>BolyWood(".$year.")</h2>";
		$con=mysqli_connect('localhost','root','') or die(mysqli_error());
		$db=mysqli_select_db($con,"test");
			
	
		$query="select distinct movies from bollywood where year='$year' order by movies";
		$res=mysqli_query($con,$query)or die(mysqli_error($con));
		
		$no=mysqli_num_rows($res);
		
		echo "<table>";
		if($no>0)
		{
			while( list($movie)=mysqli_fetch_array($res) )
			{
			echo "<tr>";
			echo "<td>";
				echo "<a href='song.php?movie=".urlencode($movie)."'>$movie</a>";
			echo "<td>";
			echo "<tr>";


			}
		}
		echo "</table>";
		mysqli_close($con);

		
	}
	else
	{
		echo "not set";
	}
?>