<?php
	$servername = "localhost";
    $user = "root";
    $password = "311331";

    $conn = mysqli_connect($servername, $user, $password);

///perhaps i can remove e few rows above

	$sql = "CREATE DATABASE IF NOT EXISTS shopdb";
	if (mysqli_query($conn, $sql)) {
		echo "Database OK, and i shoul delete this echo in the end";
	}

?>