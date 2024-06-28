<?php

if(isset($_POST['submit'])) {

	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	echo $fname."<br>".$lname."<br>".$email."<br>".$pass."<br>";
	$dbhost="localhost";
	$dbname="test";
	$dbuser="root";
	$dbpass="";
	$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if($connect)
	{
		echo "connect to database successfull";
		$query = "INSERT INTO record (fname,lname,email,password) VALUES ('".$fname."','".$lname."','".$email."','".$pass."')";
			$insert = mysqli_query($connect,$query);
			if($insert)
			{
				echo "<br>data inserted successfully";
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
else
{
	echo "please submit the form first";
}

?>