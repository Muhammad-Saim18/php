<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>update form</title>
</head>
<body>
	<?php 
	
$user= $_GET['user'];
echo $user."<br>";
$dbhost="localhost";
	$dbname="test";
	$dbuser="root";
	$dbpass="";
	$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if($connect)
	{
		echo "connect to database successfull";
		$query = "SELECT * FROM record WHERE id=$user";
		$result = mysqli_query($connect,$query);
			if(mysqli_num_rows($result)>0)
		{
			

			while($data = mysqli_fetch_assoc($result))
			{
				
				?>
				<form method="POST" action="update.php"> 
					<input type="text" name="firstname" value="<?php echo $data['fname'];?>">
					<input type="text" name="lastname" value="<?php echo $data['lname'];?>">
					<input type="email" name="email" value="<?php echo $data['email'];?>">
					<input type="text" name="password" value="<?php echo $data['password'];?>">
					<input type="hidden" name="user" value="<?php echo $data['id'];?>">
					<input type="submit" name="update" value="update">  
				</form>
				<?php
				
				

			}
			
		}
		else
		{
			echo "record not found";
		}

		


	}
	else
	{
		echo mysqli_error($connect);

	}


	?>

</body>
</html>