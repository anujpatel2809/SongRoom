<?php
	
	if(isset($_GET['movie']))
	{
		$movie=$_GET['movie'];
		echo "<table width='100%' bgcolor='#ffd700'>";
		echo "<tr>";
			echo "<td><a href='../home.php'>home</a>-><a href='./bollywood.php'>Bollywood</a>->".$movie."</td>";
		echo "</tr>";
		echo "</table>";

		echo "<h2>".$movie."</h2>";
		$con=mysqli_connect('localhost','root','') or die(mysqli_error());
		$db=mysqli_select_db($con,"test");
			
		
		$query="select song from bollywood where movies='$movie'";
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
			$song="./Bollywood/song/".$song;
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
?>