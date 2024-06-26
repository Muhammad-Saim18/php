<?php 
 session_start();
 if (isset($_POST['Login'])) 
 {
     // code...
    $Username=$_POST['FirstName'];
    $email=$_POST['Email'];
    $pass=$_POST['Password'];
    $Type=$_POST['User_type'];
    //code
    $dbhost="localhost";
    $dbname="registered";
    $dbuser="root";
    $dbpass="";
    $connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if($connect)
    {  
     echo "Connected to database successfully<br>";
     $query="SELECT * FROM regform WHERE  FirstName='".$Username."' AND Email='".$email."' AND Password='".$pass."' AND UserType='".$Type."'";
     $result= mysqli_query($connect,$query);
     if (mysqli_num_rows($result)>0) 
     {
         // code...
        $data=mysqli_fetch_assoc($result);
        if ($data['FirstName']===$Username && $data['Email']===$email && $data['Password']===$pass) 
        {
         $_SESSION['Username']=$data['FirstName'];  
         $_SESSION['Email']=$data['Email'];
         $_SESSION['Password']=$data['Password'];
         if($Type==="Admin") 
         {
             // code...
          $_SESSION['Type']=$data['UserType'];   
            header("location:Admin.php?msg=Welcome");
         }
         elseif($Type==="Operator") 
         {
             // code...
            $_SESSION['Type']=$data['UserType'];
            
            header("location:Operater.php?msg=Welcome");
         }
         else
         {
             // code...
            $_SESSION['Type']=$data['UserType'];
            header("location:Customer.php?msg=Welcome");
         } 
        } 
       else 
       {
        header("location:Login.php?msg=Please enter correct Name, Email and Password");
       } 
       
    

    }
}
    else
    {
        echo mysqli_error($connect);
    }    

 }
 else 
 {
   header("location:Login.php?msg=Please fill Login form first");
 }
?>