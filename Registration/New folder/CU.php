<?php 
session_start();
if (isset($_POST['Conform'])) {
	// code....
$dbhost="localhost";
	$dbname="registered";
	$dbuser="root";
	$dbpass="";
	$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if($connect)
	 {
			header("location:Customer.php?msg=Details of customers are given below");
		}
	else
	{
		echo mysqli_error($connect);

	}
}	
?>