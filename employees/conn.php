<?php
	$conn = mysqli_connect("localhost", "root", "", "gallery");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>