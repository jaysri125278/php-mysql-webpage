<?php 

session_start();

define('SITEURL', 'http://localhost/cake-order/');
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'cake-order');

$conn = mysqli_connect(LOCALHOST , DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
$db_select = mysqli_select_db($conn, 'cake-order') or die(mysqli_error());

?>