<?php
session_start();
if (!isset( $_SESSION['name'])) {
    # code...
    header('location:index.php');
}
?>

<!doctype html>
<html lang="en">
<!-- head-->    
<?php include 'section/head.php' ?>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    <?php include 'section/sidebar.php' ?>
    </div>

    <div class="main-panel">
 <!-- header-->    
 <?php include 'section/header.php'; 
	
        $user= $_GET['user'];
        $dbhost="localhost";
        $dbname="admin";
        $dbuser="root";
        $dbpass="";
        $connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Update information</h4>
                            </div>
                            <div class="content">
                            <?php
                            if ($connect) {
                                # code...
                                $query = "SELECT * FROM `userdata` WHERE id=$user";
                                $result = mysqli_query($connect,$query);
                                if (mysqli_num_rows($result)>0) {

                                    # code...
                                    while($data = mysqli_fetch_assoc($result))
                                    {
                                    ?>
                                       
                                            <form method="POST" action="update_data.php">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label>Company</label>
                                                            <input type="text" name="company" class="form-control" placeholder="Company" value="<?php echo $data['company']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Username</label>
                                                            <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $data['username']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email address</label>
                                                            <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $data['email']; ?>">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>First Name</label>
                                                            <input type="text" name="fname" class="form-control" placeholder="First Name" value="<?php echo $data['fname']; ?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Last Name</label>
                                                            <input type="text" name="lname" class="form-control" placeholder="Last Name" value="<?php echo $data['lname']; ?>" >
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label>Address</label>
                                                            <input type="text"  name="address" class="form-control" placeholder="Home Address" value="<?php echo $data['address']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Salary</label>
                                                            <input type="number"  name="salary" class="form-control" placeholder="Salary" value="<?php echo $data['salary']; ?>">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>City</label>
                                                            <input type="text" name="city" class="form-control" placeholder="City"  value="<?php echo $data['city']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Country</label>
                                                            <input type="text" name="country" class="form-control" placeholder="Country" value="<?php echo $data['country']; ?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Postal Code</label>
                                                            <input type="number" name="zip" class="form-control" placeholder="ZIP Code" value="<?php echo $data['zip']; ?>">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>About Me</label>
                                                            <textarea rows="5" name="description" class="form-control" placeholder="Here can be your description"value="<?php echo $data['description']; ?>" ></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="user" value="<?php echo $data['id'];?>">
                                                <button type="submit" name="submit" class="btn btn-info btn-fill pull-right">Update</button>
                                                <div class="clearfix"></div>
                                            </form>
                                     

                            <?php        
                            }
                        }
                            else
                            {
                                echo "<p>No Data found</p>";
                            }
                            }
                            else
                            {
                                echo mysqli_connect_error();
                            }
                            ?>
                               </div>
                        </div>
                    </div>
                   

                </div>
            </div>
        </div>


<?php include 'section/footer.php' ?>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <?php include 'section/script.php' ?>
</html>

