<?php 
$name= $_GET['nama'];
 download($name);
 function download($name)
{
	 $file = $name;
 	if (file_exists($file))
 	{
 		header('Content-Description: File Transfer');
		 header('Content-Type: application/octet-stream');  //audio/mpeg
		 header('Content-Disposition: attachment;filename='.basename($file));
		 header('Content-Transfer-Encoding: binary');
		 header('Content-Length: ' . filesize($file));
		 ob_clean();
		 flush(); 
		readfile($file);
		 exit;
	 }
 }
 ?> 
