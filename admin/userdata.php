<?php
session_start();
if (!isset( $_SESSION['name'])) {
    # code...
    header('location:index.php');
    die();
}
?>
<?php

 if (isset($_POST['submit'])) {
    # code...
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
    // connection
    $dbhost="localhost";
	$dbname="admin";
	$dbuser="root";
	$dbpass="";
	$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if ($conn) {
        echo "connection successful";
        # code...
         $query=" INSERT INTO `userdata` (company,username,email,fname,lname,address,salary,city,country,zip,description) VALUES ('".$company."','".$username."','".$email."','".$fname."','".$lname."','".$address."','".$salary."','".$city."','".$country."','".$zip."','".$description."') ";
        $insert=mysqli_query($conn,$query);
        var_dump($insert);
        if ($insert) 
        {
           header("location:user.php?msg=Record has been added");
           die();
        }
        else {
            echo mysqli_connect_error();
        }
    }
    else
    {
        echo mysqli_connect_error();
    }
    

 }
 else 
 {
    # code...
    header('location:user.php');
    die();
 }

?>