<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
</head>
<body>
<div class="sec">
  <div class="pt1">	
    <h1 class="t1">Register Yourself</h1>
  </div> 	
		  <Form method="POST" action="Registor user.php" class="form">
			<lable class="lable">First Name</lable><br>
			    <input type="text" name="Fname" placeholder="Enter your First name here" class="input"><br>
			<lable class="lable">Last Name</lable><br>
			    <input type="text" name="Lname" placeholder="Enter your Last name here"  class="input"><br>
			<lable class="lable">Email</lable><br>
			    <input type="email" name="email" placeholder="Enter your email here"  class="input"><br>
			<lable class="lable">Password</lable><br>
			     <input type="password" name="password" placeholder="Enter your password"  class="input"><br>
			<lable class="lable">Phone Number</lable><br>
			     <input type="phone" name="phone" placeholder="Enter your Phone Number"  class="input"><br>
			<input type="radio" name="User_type" value="Operator">

    	     <lable for="User_type"  class="lable1">Operator</lable><br>
			<input type="radio" name="User_type" value="Customer">
			     <lable for="User_type"  class="lable1">Customer</lable><br>
		    <input type="submit" name="submit" value="Register" class="b1">
			<input type="reset" name="reset" value="reset" class="b1">
			<h5 class="t2">if alredy have a account? <a href="New Folder/Login.php">Login Here</a></h5>
		  </Form>
</div>	
</body>
</html>