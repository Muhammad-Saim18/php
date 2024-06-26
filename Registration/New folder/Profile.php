<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="Profile.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile Page</title>
</head>
<body>
<?php
session_start(); 
$dbhost="localhost";
	$dbname="registered";
	$dbuser="root";
	$dbpass="";
	$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
?>
<?php	
	if($connect)
	{
		echo "<h1>"."Your Data is given below"."</h1>";
		$query = "SELECT * FROM regform Where Email='".$_SESSION['Email']."'";
		$result = mysqli_query($connect,$query);
		
		if(mysqli_num_rows($result)>0)
		{
			echo "<table>";
			echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>First name</th>";
            echo "<th>Last name</th>";
            echo "<th>Email</th>";
            echo "<th>Password</th>";
            echo "<th>Phone</th>";
            echo "<th>UserType</th>";
            echo "<th>Status</th>";
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
				echo "</tr>";
				
				

			}
			echo "</table>";
		}


	}
	else
	{
		echo mysqli_error($connect);

	}

?>
</body>
</html>
