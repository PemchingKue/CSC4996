<?php
/*if(isset($_POST['db_user']))
{
	$dbuser = $_POST['db_user'];
}
if(isset($_POST['db_pass']))
{
	$dbpass = $_POST['db_pass'];
}
*/

//$dbuser = $_POST['db_user'];
//$dbpass = $_POST['db_pass'];


DEFINE ('DB_USER', 'student');
DEFINE ('DB_PASSWORD', 'test123');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'todo');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to mysql' . mysqli_connect_error());

//header('Location: todo.php');
?>
