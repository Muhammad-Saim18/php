<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="welcome.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>

<div class="sec"> 
<?php
if (isset($_GET['msg'])) 
{
    $dbhost="localhost";
    $dbname="test";
    $dbuser="root";
    $dbpass="";
    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
}
else
{
  header('location:Login.php?msg=Please Login First');
}

?>  
<div class="pt1">    
         <h1 class="h1"><?php echo $_GET['msg'];?></h1>
         <p class="t1"><?php echo $_SESSION['username'];?></p>
</div>
<div class="pt2">
    <div class="b1">
      <a href='logout.php' class="logout">Logout</a> 
        
    </div>
  </div>
  <div class="sec2">
    <Form method="POST" action="expense.php">
        <input type="text" name="expense" placeholder="Enter Expense name" class="input" >
        <input type="number" name="amount" placeholder="Enter amount" class="input">
        <label for="ExpenseType">Choose ExpenseType :</label>
          <select name="Expense_Type" id="Expense_Type" calinput>
          <option value="">--Expense Type--</option>
            <option value="Income">Income</option>
            <option value="Payment">Payment</option>
          </select>
         
        <input type="submit" name="Add" value="Add" class="add">
        
    </Form>
  </div>

</div>
<div class="sec3">

<?php 
 if ($conn) 
 {
 
  $query = "SELECT * FROM expense  ORDER BY ID desc  LIMIT 5";
  $result = mysqli_query($conn,$query);
  
  if(mysqli_num_rows($result)>0)
        {
            echo "<table >";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Expense Name</th>";
            echo "<th>Amount</th>";
            echo "<th>Expense-Type</th>";
            echo "<th>Total</th>";
            echo "</tr>";

            while($data = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td>".$data['ID']."</td>";
                echo "<td>".$data['ename']."</td>";
                echo "<td>".$data['amount']."</td>";
                echo "<td>".$data['expensetype']."</td>";
                if ($data['expensetype']=='Payment') {
                  # code...
                  echo "<td>-".$data['amount']."</td>";
                }
                else {
                  # code...
                  echo "<td>".$data['amount']."</td>";
                }
                
                echo "<tr>";

            }
            echo "</table>";
        }
        else {
          echo mysqli_connect_error();
        }

 }
 else
 {
   echo mysqli_connect_error();
 }
?>
</div>
<div class="sec4">
<h3>Showing Last 5 Expense Record</h3>
</div>
</body>
</html>