<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LOGIN Page</title>
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
	  <h1 class="t1">Login</h1>
     </div>
          <form method="POST" action="CheckForm.php" class="Form">
            <label for="Username"><i class="fa-solid fa-user fa-fade"></i></label> 
              <input type="text" name="Username" placeholder="Enter your name" class="ptt">
            <label for="Emaill"><i class="fa-sharp fa-solid fa-envelope fa-beat-fade"></i></label>
              <input type="email" name="Email" placeholder="Enter your Email" class="ptt">
            <label for="password"><i class="fa-solid fa-lock fa-beat-fade"></i></label>
               <input type="password" name="password" placeholder="Enter password" class="ptt">
            <input type="submit" name="Login" value="Login" class="login">
          </form> 
  </div>  
</div>
</body>
</html>