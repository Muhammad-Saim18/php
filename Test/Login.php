<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
        if(isset($_GET['msg'])) 
         {
             echo "<h1>".$_GET['msg']."</h1>";   
         }

?>
    <div class=sec>
        <div class=head>
            <h1 class="txt">Login</h1>
        </div>
        <div>
            <Form method="POST" action="check.php">
            <input type="text" name="username" placeholder="Enter your Name" class="input">
            <input type="email" name="email" placeholder="Enter your Email" class="input">
            <input type="password" name="password" placeholder="Enter your Password" class="input">
            <input type="Submit" name="Login" value="Login" class="login" >
            </Form>
        </div>
    </div>      
</body>
</html>