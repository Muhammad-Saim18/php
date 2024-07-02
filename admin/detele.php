<?php 
session_start();
if (!isset( $_SESSION['name'])) {
    # code...
    header('location:index.php');
}
    $user= $_GET['user'];
    $dbhost="localhost";
	$dbname="admin";
	$dbuser="root";
	$dbpass="";
	$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if($connect)
	{
		$query = "DELETE FROM `userdata` WHERE id=$user";
		$result = mysqli_query($connect,$query);
        
		if ($result) 
		{
			header("location:table.php?msg=Record has been deleted");
		}
		else
		{
			echo mysqli_error($connect);
		}
		


	}
	else
	{
		echo mysqli_connect_error();

	}


?>