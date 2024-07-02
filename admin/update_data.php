<?php  
if (isset($_POST['submit'])) {
    # code...

   $user = $_POST['user'];

    $dbhost="localhost";
	$dbname="admin";
	$dbuser="root";
	$dbpass="";

    $company= $_POST['company'];
    $username= $_POST['username'];
    $email= $_POST['email'];
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $address= $_POST['address'];
    $salary = $_POST['salary'];
    $city= $_POST['city'];
    $country= $_POST['country'];
    $zip= $_POST['zip'];
    $description= $_POST['description'];
	$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if($connect)
	{
		echo "connect to database successfull";
		$query = "UPDATE `userdata` SET `company`='".$company."',`username`='$username',`email`='$email',`fname`='$fname',`lname`='$lname',`address`='$address',`salary`='$salary',`city`='$city',`country`='$country',`zip`='$zip',`description`='$description' WHERE id= '$user'";
        $result = mysqli_query($connect,$query);
		if ($result) {
			header("location:table.php?msg=Record has been updated");
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


}
else
{
    header('location:Edit.php');
}


?>