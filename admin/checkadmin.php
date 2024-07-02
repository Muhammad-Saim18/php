<?php
session_start();
if (isset($_POST['Login'])) 
{
    # code...
    $name= $_POST['Name'];
    $email= $_POST['Email'];
    $pass= $_POST['Password'];
    
    $dbhost="localhost";
	$dbname="admin";
	$dbuser="root";
	$dbpass="";
    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if($conn)
    {
        $query = "SELECT * FROM `operator` WHERE `Name`='".$name."' AND `Email`='".$email."' AND `Password`='".$pass."'";

        $result= mysqli_query($conn,$query);
        if (mysqli_num_rows($result)>0) 
        {
            # code...
            $data=mysqli_fetch_assoc($result);
            if ($data['Name']===$name && $data['Email']===$email && $data['Password']===$pass) 
            {
                # code...
                $_SESSION['name']=$data['Name'];  
                $_SESSION['email']=$data['Email'];
                $_SESSION['pass']=$data['Password'];
                header('location:dashboard.php');
            }
            else
            {
                header('location:index.php');
            }
        }

    }
    else
    {
      echo mysqli_connect_error();
    }
}
else
{
   header('location:index.php');
}


?>