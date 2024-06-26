<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Page</title>
</head>
<body>
<div class="sec">
<?php
if (isset($_GET['msg'])) 
{
    $dbhost="localhost";
    $dbname="registered";
    $dbuser="root";
    $dbpass="";
?>    
<div class="pt1">    
         <h1 class="h1"><?php echo $_GET['msg'];?></h1>
         <p class="t1"><?php echo $_SESSION['Username']."&nbsp"."&nbsp".$_SESSION['Type'];?></p>
</div>
<div class="pt2">
   <div class="ulp"> 
    <ul class="iul"> 
      <li><a href="#"class="aa">User</a>
         <ul class="drop">
           <li><a href="OpForm.php">Operaters</a></li>
           <li><a href="CuForm.php">Customers</a></li>
         </ul>  
      </li>
      <li><a href="notification.php" class="aa"><i class="fa-solid fa-bell"></i></a></li>    
    </ul>
   </div>
    <div class="b1">
      <a href='logout.php' class="logout">Logout</a>    
    </div>
  </div>
</div>
<?php
    $connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if($connect)
    {
       
        $query = "SELECT * FROM regform";
        $result = mysqli_query($connect,$query);
        
        if(mysqli_num_rows($result)>0)
        {
            echo "<table >";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>First name</th>";
            echo "<th>Last name</th>";
            echo "<th>Email</th>";
            echo "<th>Password</th>";
            echo "<th>Phone</th>";
            echo "<th>UserType</th>";
            echo "<th>Status</th>";
            echo "<th>Approved</th>";
            echo "<th>Reject</th>";
            echo "</tr>";

            while($data = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td>".$data['ID']."</td>";
                echo "<td>".$data['FirstName']."</td>";
                echo "<td>".$data['LastName']."</td>";
                echo "<td>".$data['Email']."</td>";
                echo "<td>".$data['Password']."</td>";
                echo "<td>".$data['Phone']."</td>";
                echo "<td>".$data['UserType']."</td>";
                echo "<td>".$data['Status']."</td>";
                echo "<td><a href='ApprovedForm.php?user=".$data['ID']."'>Approved</a></td>";
                echo "<td><a href='RejectForm.php?user=".$data['ID']."'>Reject</a></td>";
                echo "</tr>";
                
                

            }
            echo "</table>";
        }


    }
    else
    {
        echo mysqli_error($connect);
     }
}
else
{
    header("location:Login.php?msg= please login first to visit this page");
}




?>    
</body>
</html>

