<?php
session_start();
if(isset($_POST['Add']))
{
  $expense=$_POST['expense'];
  $amount=$_POST['amount'];
  $Expense_Type=$_POST['Expense_Type'];
  $dbhost="localhost";
  $dbname="test";
  $dbuser="root";
  $dbpass="";
  $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
  if($conn)
  {
   $query = "INSERT INTO `expense` (`ename`,`amount`,`expensetype`)Values('$expense','$amount','$Expense_Type')";
   $result = mysqli_query($conn,$query);
    if($result)
    {
      header('location:welcome.php?msg=Expense has Added');
    }
    else
    {
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
    header('location:Login.php?msg=Please Login First');
}
 ?>