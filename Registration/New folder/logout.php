<?php   
	// code...
session_start();
session_destroy();
session_unset();
 header("location:Login.php?msg=You have logout successfully");

?>