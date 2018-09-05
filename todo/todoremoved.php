<html>
<head>
<title>Removed TODO</title>
</head>
<body>

<?php

if(isset($_POST['remove'])){

$date = $_POST['date_time'];


require_once('C:\wamp64\www\test\mysqli_connect.php');
        
        $query = "DELETE FROM todolist WHERE date_time = ?";
		$stmt = mysqli_prepare($dbc, $query);
		mysqli_stmt_bind_param($stmt, "s", $date);
		mysqli_stmt_execute($stmt);
		
		$affected_rows = mysqli_stmt_affected_rows($stmt);
		if($affected_rows == 1){
            
            echo 'TODO Removed';
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
            
        } else {
            
            echo 'Error Occurred<br />';
            echo mysqli_error($dbc);
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
		}
}
?>

<form action="todoremoved.php" method="post">

<b>Remove from the list</b>

<p>Specify Date:
<input type="text" name="date_time" size="30" value="" />
</p>

<p>
<input type="submit" name="remove" value="Delete" />
</p>

</form>
<a href="index.php">TODO index</a>
<a href="addTodo.php">Add TODO</a>
<a href="getTodo.php">View TODO List</a>
</body>

</html>