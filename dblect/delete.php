<?php 
$user= $_GET['user'];
echo $user;
$dbhost="localhost";
	$dbname="test";
	$dbuser="root";
	$dbpass="";
	$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if($connect)
	{
		echo "connect to database successfull";
		$query = "DELETE FROM record WHERE id=$user";
		$result = mysqli_query($connect,$query);
		if ($result) 
		{
			echo "record deleted successfully";
			header("location:fetch.php");
		}
		else
		{
			echo mysqli_error($connect);
		}
		


	}
	else
	{
		echo mysqli_error($connect);

	}


?>