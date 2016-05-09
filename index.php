<?php

include 'form.php';

if(isset($_POST['submit'])){
	$id = $_POST['name'];
	pass($id);	
}

?>
<html>
<head>
	<title>TEDxJUIT Ticketing System</title>
</head>
<body>	
	<form action="index.php" method="post">
	Id: <input type="text" name="name"><br>
	<input type="submit" name="submit">
	</form>
</body>
</html>