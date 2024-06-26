<?php 
session_start();
if (isset($_POST['Conform'])) {
	// code...

$user= $_POST['user'];
$Status="Unapproved";
echo $user."<br>";
$dbhost="localhost";
	$dbname="registered";
	$dbuser="root";
	$dbpass="";
	$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if($connect)
	{
		echo "connect to database successfull<br>";
		$query = "UPDATE regform SET Status='".$Status."' WHERE ID= '".$user."'";
		$result = mysqli_query($connect,$query);
		if ($result) {
			
			header("location:Admin.php?msg=Application has been Rejected");
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





}
?>