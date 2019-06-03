<?php
$hostname = 'localhost';
$username = 'root';
$passwordname = '311331';
$basename = 'shopdb';
$conn = mysqli_connect($hostname, $username, $passwordname, $basename);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, name, count, price FROM product";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo "<div>";
		echo 'Name:' .$row['name '] . '    ';
		echo 'countity:' . $row['count'] . ' price:';
		echo $row['price']. '$';
		echo "</div>";
		echo '<form method="post" action="admin.php">';

		echo '<input type="text" name="count" value="1" />';
		echo '<input type="submit" name="save" value="change" ><br /><br />';

		echo '</form>';
		if (isset($_POST['save'])) {
			$count = strip_tags(trim($_POST['count']));

			mysqli_query($conn, " UPDATE product SET count='$count' WHERE id='$id' ");

			mysqli_close();
		}
	}
} else {
	echo "0 results";
}
?>



