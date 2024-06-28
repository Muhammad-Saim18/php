<?php 
$dbhost="localhost";
	$dbname="test";
	$dbuser="root";
	$dbpass="";
	$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if($connect)
	{
		echo "connect to database successfull";
		$query = "SELECT * FROM record";
		$result = mysqli_query($connect,$query);
		
		if(mysqli_num_rows($result)>0)
		{
			echo "<table>";
			echo "<tr>";
			echo "<th>id</th>";
			echo "<th>first name</th>";
			echo "<th>last name</th>";
			echo "<th>email</th>";
			echo "<th>password</th>";
			echo "<th>delete</th>";
			echo "<th>edit</th>";
			echo "</tr>";

			while($data = mysqli_fetch_assoc($result))
			{
				echo "<tr>";
				echo "<td>".$data['id']."</td>";
				echo "<td>".$data['fname']."</td>";
				echo "<td>".$data['lname']."</td>";
				echo "<td>".$data['email']."</td>";
				echo "<td>".$data['password']."</td>";
				echo "<td><a href='delete.php?user=".$data['id']."'>Delete</a></td>";
				echo "<td><a href='updateform.php?user=".$data['id']."'>update</a></td>";
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