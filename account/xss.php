<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!DOCTYPE html>
<?php
session_start();
include("connect.php");


$xss = $_POST['xss'];
echo '輸入值:';
echo '<h1>'.$xss.'</h1>';

?>
