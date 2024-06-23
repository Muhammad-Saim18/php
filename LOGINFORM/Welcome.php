<?php
session_start();
if (isset($_GET['msg'])) 
{
    echo "<h1>".$_GET['msg']."</h1>";
    echo $_SESSION['Username']."<br>";
    echo $_SESSION['email']."<br>";
    echo $_SESSION['password']."<br>";
    echo "<a href='Logout.php'>Logout</a>";
}
else
{
    header("location:Login.php?msg= please login first to visit this page");
}




?>