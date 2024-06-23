<?php
    session_start();
    if(isset($_POST['Login']))
    {
     $Username=$_POST['Username'];
     $Email=$_POST['Email'];
     $pass=$_POST['password'];
     echo $Username."<br>".$Email."<br>".$pass."<br>"; 
     //code start
     $dbhost="localhost";
     $dbuser="root";
     $dbname="data";
     $dbpass="";
     $connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if($connect) 
    {
      echo "Connected with database successfully <br>";
      $query="SELECT * FROM file WHERE Fname='".$Username."' AND email='".$Email."' AND password='".$pass."'";
       $result= mysqli_query($connect,$query);	
        if(mysqli_num_rows($result)>0)
        {
          $data=mysqli_fetch_assoc($result);   
          if($data['Fname']===$Username) 
          {
           $_SESSION['Username']=$data['Fname'];
           if($data['email']===$Email)
            {
             $_SESSION['email']=$data['email'];
              if($data['password']===$pass) 
              {
              $_SESSION['password']=$data['password'];
              header("location:Welcome.php?msg=Welcome User"); 
              }
          
            }  
            else 
              {
                header("location:Login.php?msg=Please Enter correct Password");
              }
                
          }
              else
            {
              header("location:Login.php?msg=Please Enter correct email");
            }
       
          }
        else
          {
            header("location:Login.php?msg=Please Enter correct Username,Email and password");
          }  
 }
      else
     {
      echo mysqli_error($connect);
     }
     //code end
}
    else 
    {  
      header("location:Login.php?msg=Please fill Login form first");
    }    
?>