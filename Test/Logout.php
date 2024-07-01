<?php
 session_start();
if(isset($_GET['msg']))
{

 echo"h";
}
session_destroy();
session_unset();
header("location:Login.php?msg=Your account has logout successfully");  	
?>