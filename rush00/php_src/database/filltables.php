<?php	

	$servername = "localhost";
    $user = "root";
    $password = "311331";
    $dbname = "shopdb";

    $conn = mysqli_connect($servername, $user, $password, $dbname);
    if (!$conn) {
   		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "CREATE TABLE IF NOT EXISTS users (
	login VARCHAR(30) NOT NULL,
	password VARCHAR(30) NOT NULL,
	permissions INT(1)
	)";
if (mysqli_query($conn, $sql)) {
	echo "Table categories OK";
} else {
	echo "Error of creation: " . mysqli_error($conn);
}

	$sql = "CREATE TABLE IF NOT EXISTS product (
	id INT(6),
	name VARCHAR(30) NOT NULL,
	count INT(6),
	price INT(7)
	)";
if (mysqli_query($conn, $sql)) {
	echo "Table categories OK";
} else {
	echo "Error of creation: " . mysqli_error($conn);
}

	$sql = "CREATE TABLE IF NOT EXISTS cart (
	id INT(6),
	name VARCHAR(30) NOT NULL,
	count INT(6),
	price INT(7)
	)";
	if (mysqli_query($conn, $sql)) {
 		 echo "Table categories OK";
	} else {
   		  echo "Error of creation: " . mysqli_error($conn);
	}
?>