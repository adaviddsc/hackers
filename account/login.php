<?php
session_start();
include("connect.php");

/*$username = addslashes($_POST['username']);
$password = addslashes($_POST['password']);
if (!get_magic_quotes_gpc()) {
	$username = addslashes($_POST['username']);
	$password = addslashes($_POST['password']);
	echo '123<br>';
} 
else {

}*/
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM account where username = '$username' and password = '$password'";
//$sql = "SELECT * FROM account where (username = '' or '1'='1') and (password = '' or EXISTS(SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME like '%a%') AND ''='')";
$result = mysql_query($sql);
$row = mysql_fetch_row($result);
//echo $row[0].','.$row[1].','.$row[2].','.$row[3].',<br>';
//$sql = "SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME like '%accoun%'";
/*while( $row = mysql_fetch_array($result, MYSQL_NUM) ){
	for ( $i=0; $i<=999999; $i++){
		if (isset($row[$i]))
			echo $row[$i].'   ,   ';
		else
			break;
	}
	echo '<br><br>';
}*/


if( $row[1] != null && $row[2] != null)
{
    echo $row[1].'@@@'.$row[2];
}
else
{
    echo "login failure";
}
/*$sql = "SELECT * FROM account where username = '$username'";
$sql = "SELECT * FROM account where username = '$username' and password = '$password'";
$result = mysql_query($sql);
$row = mysql_fetch_assoc($result);
echo $row['username'].'&'.$row['password'].'&'.$username.'&'.$password.'<br>';

if( $row['username'] != null && $row['password'] != null && $row['username'] == $username && $row['password'] == $password )
{

    echo $row['username'].'/'.$row['password'];
    echo '<br>success!';
}
else
{
    echo "login failure";
}*/
?>
