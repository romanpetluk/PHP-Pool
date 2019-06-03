<?php
//include ("../../html_src/head.php");
//include_once ("../database/connectserver.php");

//
//$result = mysqli_query("	SELECT count FROM product
//								WHERE id='$id'
//");

$hostname = 'localhost';
$username = 'root';
$passwordname = '311331';
$basename = 'shopdb';
$conn = mysqli_connect($hostname, $username, $passwordname, $basename);

echo "<br />";
$id = $_GET['id'];


$result = mysqli_query($conn, " SELECT name, count, price price FROM product 
                              WHERE id='$id'
 ");

//$id = 1;

$row = mysqli_fetch_assoc($result);

echo "$row[count]";
echo "$id";

//if (isset($_POST['save'])) {
//	$count = strip_tags(trim($_POST['count']));
//	echo "$count";
//
//	mysqli_query($conn, " UPDATE product SET count='$count' WHERE id='01' ");
//
//	mysqli_close();
//}


?>
<!--<form method="post" action="selectcount.php">-->
<!--<br />-->
<!---->
<!--<input type="text" name="count" value="1" /><br />-->
<!--<input type="submit" name="save" value="buy" />-->
<!---->
<!--</form>-->