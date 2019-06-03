<?php

foreach ($_GET as $key=>$item) {
	if ($item) {
		echo ($key) . ": ";
	}
	echo "$item\n";
}



?>