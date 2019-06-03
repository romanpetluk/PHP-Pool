
<?php    
    session_start();
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    include('html_src/header.php');
    require_once('php_src/database/connectserver.php');
    echo "<br>";
    require_once('php_src/database/createdatabase.php');
    echo "<br>";
    require_once('php_src/database/filltables.php');
    echo "<br>";
    require_once('php_src/database/addvalues.php');
    //include('html_src/header.php');
    echo "<br>";

//    require('php_src/cart/admin.php');
//    echo "<br>";
//    require('php_src/cart/output_produxt.php');
//    echo "<br>";
//    require('php_src/cart/selectcount.php');
//    echo "<br>";
?>
   

