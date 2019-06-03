<?php
	$servername = "localhost";
    $user = "root";
    $password = "311331";
    $name ="";
    $port = "8100";
	$conn = mysqli_connect($servername, $user, $password, $name, $port);
	if (!$conn) {
   		die("Connection error" . mysqli_connect_error());

	}
	echo "Connection OK, and i should delete this echo in the end";
?>