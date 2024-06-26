<?php
session_start();	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Approved</title>
</head>
<body>
	<?php 

$user= $_GET['user'];
echo $user."<br>";
$dbhost="localhost";
	$dbname="registered";
	$dbuser="root";
	$dbpass="";
	$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if($connect)
	{
		echo "connect to database successfull";
		$query = "SELECT * FROM regform WHERE id=$user";
		$result = mysqli_query($connect,$query);
			if(mysqli_num_rows($result)>0)
		{
			

			while($data = mysqli_fetch_assoc($result))
			{
				
				?>
				<form method="POST" action="Approved.php">
					<lable>Conform to approved</lable>
				    <input type="hidden" name="user" value="<?php echo $data['ID'];?>"> 
					<input type="hidden" name="Status" value="<?php echo $data['Status'];?>">
					<input type="submit" name="Conform" value="Conform">  
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