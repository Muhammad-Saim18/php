<?php  
if(isset($_POST['submit'])) 
{
  //code	
  $fname=$_POST['Fname'];
  $lname=$_POST['Lname'];
  $email=$_POST['email'];	
  $pass=$_POST['password'];
  $phone=$_POST['phone'];
  $user=$_POST['User_type'];
  echo $fname."<br>".$lname."<br>".$email."<br>".$pass."<br>".$phone."<br>";
  if($user=="Operator") 
  {
  	// code...
    echo "Operator <br>";
  }
  else
  {
  	//code
  	echo "Customer<br>"; 
  }
  echo "unapproved<br>";
   $dbhost="localhost";
   $dbuser="root";
   $dbname="registered";
   $dbpass="";
   $connect= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
   if ($connect) 
   {
   	// code...
   	echo "Connection to database Successfully<br>";
   	$query="INSERT INTO regform(FirstName,LastName,Email,Password,Phone,Usertype) Values ('".$fname."','".$lname."','".$email."','".$pass."','".$phone."','".$user."')"; 
    $insert= mysqli_query($connect,$query);
    if ($insert) 
    {
    	// code...
    	echo "You have registered successfully";

    }
    else
   {
   	//code
   	echo mysqli_error($connect);
   }



   }
   else
   {
   	//code
   	echo mysqli_error($connect);
   }




}
else 
{
	// code...
   echo "Please registered first";
}
?>