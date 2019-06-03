<?php
	$servername = "localhost";
    $user = "root";
    $password = "311331";
    $name = "shopdb";
    $port = "8100";
	$conn = mysqli_connect($servername, $user, $password, $name, $port);
	if (!$conn) {
   		die("Ошибка подключения: " . mysqli_connect_error());
	}
	echo "Успешное подключение";
?>