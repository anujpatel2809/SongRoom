
<?php
	
	
		$con=mysqli_connect('localhost','root','') or die(mysqli_error());
		$db=mysqli_select_db($con,"test");
			
		
		$query="select song from recently ";
		$res=mysqli_query($con,$query)or die(mysqli_error($con));
		
		$no=mysqli_num_rows($res);
		echo "<table width='100%' bgcolor='pink'>";
		echo "<tr>";
			echo "<td height='50'><center><h3>Recently Added</h3></center></td>";
		echo "</tr>";
		echo "</table>";
		echo "<table border='1'><colgroup width='80%'>";
		if($no>0)
		{
			while( list($song)=mysqli_fetch_array($res) )
			{echo "<tr>";
			echo "<td>";
				echo $song;
			echo "</td>";
			$song="./recently/".$song;
			echo "<td>";
				echo "<a href='./download.php?nama=".urlencode($song).".mp3'><img src='download.gif'></a>";
			echo "</td>";
			
			echo "</tr>";
			}
		}
		echo "</table>";
		mysqli_close($con);

		
	
?>


