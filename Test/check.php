<?php
session_start();
    $dbhsot="localhost";
    $dbuser="root";
    $dbname="test";
    $dbpass="";
    $connect=mysqli_connect($dbhsot,$dbuser,$dbpass,$dbname);


 if(isset($_POST['Login']))
 {
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];  
    if($connect)
    {
      $query="SELECT * From `file` WHERE `fname`='$username' AND `email`='$email' AND `password`='$password'";

      $result=mysqli_query($connect,$query);

      if(mysqli_num_rows($result)>0)
      {
        $data=mysqli_fetch_assoc($result);
        if ($data['fname']===$username) 
        {
          # code...
          $_SESSION['username']=$data['fname'];
          if ($data['email']===$email) 
          {
            # code...
            $_SESSION['email']=$data['email'];
            if ($data['password']===$password) {
              # code...
              $_SESSION['password']=$data['password'];
              header('location:welcome.php?msg=Welcome');
            }
            else{
              header('location:Login.php?msg=Please Enter correct Information');
            }
          }

        }
      } 
      else
      {
        header('location:Login.php?msg=NO DATA FOUND');
      }
    }
    else
    {
       echo mysqli_connect_error() ;
    }
     
}
  else
    { 
      header('location:Login.php?msg=Please Login First');
    }

?>