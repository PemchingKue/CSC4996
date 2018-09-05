<html>
<head>
<title>VIEW TASK</title>
</head>
<body>
<?php

require_once('C:\wamp64\www\test\mysqli_connect.php');

$query = "SELECT date_time, todo_list, done FROM todolist";

$response = @mysqli_query($dbc, $query);

if($response){
	echo '<table align="left" cellspacing="5" cellpadding="8">
	
	<tr><td align="left"><b>Date_time</b></td>
	<td align="left"><b>Todo_list</b></td>
	<td align="left"><b>Done</b></td></tr>';
	
	while($row = mysqli_fetch_array($response)){
		echo '<tr><td align ="left">' . 
		$row['date_time'] . '</td><td align ="left">' . 
		$row['todo_list'] . '</td><td align ="left">' . 
		$row['done'] . '</td><td align ="left">';
		
		echo'</tr>';
	}
	
	echo '</table>';
}
else
{
	echo "could not run database query<br/>";
	echo mysqli_error($dbc);
}

mysqli_close($dbc);

?>
<a href="index.php">TODO index</a><br>
<a href="addTodo.php">Add TODO</a><br>
<a href="removetodo.php">Remove TODO</a><br>
</body>
</html>