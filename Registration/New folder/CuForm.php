<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Approved</title>
</head>
<body>
	<?php 
session_start();	
$dbhost="localhost";
	$dbname="registered";
	$dbuser="root";
	$dbpass="";
	$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
				?>
				<form method="POST" action="CU.php">
					<lable>Click confrom to access operater details</lable> 
					<input type="submit" name="Conform" value="Conform">  
				</form>
</body>
</html>