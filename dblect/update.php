<?php  
$user= $_POST['user'];
echo $user."<br>";
$dbhost="localhost";
	$dbname="test";
	$dbuser="root";
	$dbpass="";
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if($connect)
	{
		echo "connect to database successfull";
		$query = "UPDATE record SET fname='".$fname."',lname='".$lname."',email='".$email."',password='".$pass."' WHERE id= '".$user."'";
		$result = mysqli_query($connect,$query);
		if ($result) {
			echo "record updated successfully";
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