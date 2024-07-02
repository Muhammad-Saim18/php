<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<title>Login</title>
</head>
<body>
<div class="sec">
   <div class="pt">
     <h1 class="t1">Login Here</h1> 
   </div>
            <Form method="POST" action="checkadmin.php" class="form">
               <lable for="FirstName" class="lable"><i class="fa-solid fa-user"></i></lable>
               <input type="text" name="Name" placeholder="Enter your Name" class="input" required>
               <lable for="Email" class="lable"><i class="fa-solid fa-envelope"></i></lable>
               <input type="email" name="Email" placeholder="Enter your email" class="input" required>
               <lable for="Password" class="lable"><i class="fa-solid fa-lock"></i></lable>
               <input type="password" name="Password" placeholder="Enter your Password" class="input" required>
               <input type="Submit" name="Login" value="Login" class="login">
            </Form>
</div>            	
</body>
</html>