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
   <?php 
       if(isset($_GET['msg'])) 
         {
             echo "<h1>".$_GET['msg']."</h1>";   
         }
   ?>
<div class="sec">
   <div class="pt">
     <h1 class="t1">Login Here</h1> 
   </div>
            <Form method="POST" action="check.php" class="form">
               <lable for="FirstName" class="lable"><i class="fa-solid fa-user"></i></lable>
               <input type="text" name="FirstName" placeholder="Enter your First name" class="input">
               <lable for="Email" class="lable"><i class="fa-solid fa-envelope"></i></lable>
               <input type="email" name="Email" placeholder="Enter your email" class="input">
               <lable for="Password" class="lable"><i class="fa-solid fa-lock"></i></lable>
               <input type="password" name="Password" placeholder="Enter your Password" class="input">
               <div class="pt2"><h3 class="h3">Select your role</h3></div> 
               <input type="radio" name="User_type" value="Admin" >
               <lable for="User_type"class="lable1">Admin</lable>
               <input type="radio" name="User_type" value="Operator" >
               <lable for="User_type" class="lable1">Operator</lable>
               <input type="radio" name="User_type" value="Customer">
               <lable for="User_type" class="lable1">Customer</lable> 
               <input type="Submit" name="Login" value="Login" class="login">
            </Form>
</div>            	
</body>
</html>