<?php
session_start();

session_destroy();
session_unset();
header("location:Login.php?msg=Your account has logout successfully")
	
?>