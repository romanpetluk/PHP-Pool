<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_reporting', E_ALL);

session_start();
if ($_SESSION['loggued_on_user'])
	echo $_SESSION['loggued_on_user']."\n";
else
	echo "ERROR\n";

?>