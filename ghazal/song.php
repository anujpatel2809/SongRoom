<?php
	
	if(isset($_GET['artist']))
	{
		$artist=$_GET['artist'];
		echo "<table width='100%' bgcolor='#ffd700'>";
		echo "<tr>";
			echo "<td><a href='../home.php'>home</a>-><a href='./ghazals.php'>Ghazal</a>->".$artist."</td>";
		echo "</tr>";
		echo "</table>";
		echo "<h2>".$artist."</h2>";
		$con=mysqli_connect('localhost','root','') or die(mysqli_error());
		$db=mysqli_select_db($con,"test");
			
		
		$query="select song from ghazal where artist='$artist'";
		$res=mysqli_query($con,$query)or die(mysqli_error($con));
		
		$no=mysqli_num_rows($res);
		
		echo "<table>";
		if($no>0)
		{
			while( list($song)=mysqli_fetch_array($res) )
			{echo "<tr>";
			echo "<td>";
				echo $song;
			echo "</td>";
			$song="./ghazal/song/".$song;
			echo "<td>";
				echo "<a href='../download.php?nama=".urlencode($song).".mp3'><img src='../download.gif'></a>";
			echo "</td>";
			echo "<td>";		
				echo "<a href='../onlineplay.php?nama=".urlencode($song).".mp3'><img src='../play.png'></a>";
			echo "<td>";
			echo "</tr>";
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