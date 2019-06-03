<?php

if ($_SERVER['PHP_AUTH_USER'] === 'zaz' && $_SERVER['PHP_AUTH_PW'] === 'jaimelespetitsponeys') {
	$img = base64_encode(file_get_contents('../src/42.png'));
	echo "<html><body>\nHello Zaz<br />\n";
	$foto = "<img src='data:image/png;base64,$img'";
	echo $foto;
	echo "\n</body></html>\n";
}
else {
	echo "<html><body>That area is accessible for members only</body></html>";
}
?>
