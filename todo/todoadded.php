<html>
<head>
<title>Added TODO</title>
</head>
<body>
<?php

if(isset($_POST['submit'])){
	    $data_missing = array();
    
    if(empty($_POST['date_time'])){

        $data_missing[] = 'Date Time';

    } else {

        $dt_name = trim($_POST['date_time']);

    }

    if(empty($_POST['todo_list'])){

        $data_missing[] = 'TODO list';

    } else{

        $t_name = trim($_POST['todo_list']);

    }

    if(empty($_POST['done_list'])){

        $data_missing[] = 'done';

    } else {

        $d_name = trim($_POST['done_list']);

    }
	if(empty($data_missing)){
        
		
        require_once('C:\wamp64\www\test\mysqli_connect.php');
        
        $query = "INSERT INTO todolist (date_time, todo_list, done) VALUES (?, ?, ?)";
		$stmt = mysqli_prepare($dbc, $query);
		mysqli_stmt_bind_param($stmt, "sss", $dt_name, $t_name, $d_name);
		mysqli_stmt_execute($stmt);
		
		$affected_rows = mysqli_stmt_affected_rows($stmt);
		if($affected_rows == 1){
            
            echo 'TODO Entered';
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
            
        } else {
            
            echo 'Error Occurred<br />';
            echo mysqli_error();
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
            
        }
        
    } else {
        
        echo 'You need to enter the following data<br />';
        
        foreach($data_missing as $missing){
            
            echo "$missing<br />";
		}
	}
}

?>

<form action="todoadded.php" method="post">

<b>Add to the list</b>

<p>Date:
<input type="text" name="date_time" size="30" value="" />
</p>

<p>TODO:
<input type="text" name="todo_list" size="30" value="" />
</p>

<p>Done:
<input type="text" name="done_list" size="30" value="" />
</p>

<p>
<input type="submit" name="submit" value="Add" />
</p>

</form>
<a href="index.php">TODO index</a>
<a href="removetodo.php">Remove TODO</a>
<a href="getTodo.php">View TODO List</a>
</body>
</html>