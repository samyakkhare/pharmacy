<?php
	$servername = 'localhost';
	$dbusername = 'root';
	$dbpassword = '';
	$dbname = 'pharmacy';

	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

	if(!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		echo 'Sorry. Failed to connect';
	}
?>