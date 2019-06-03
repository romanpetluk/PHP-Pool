
<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

	$servername = "localhost";
    $user = "root";
    $password = "311331";
	$basename = 'shopdb';
    $carts = mysqli_connect($servername, $user, $password, $basename);

if (!mysqli_query($carts, "INSERT INTO cart (id, name, count, price)
    VALUES ('1', 'samsung_s9', '19', '750')")) {
	echo "pizdec";
}
echo "123321"
?>
