<html>
<head>
<title>Add TODO</title>
</head>
<body>

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
<a href="index.php">TODO INDEX</a>
<a href="removetodo.php">Remove TODO</a>
<a href="getTodo.php">View TODO List</a>
</body>
</html>