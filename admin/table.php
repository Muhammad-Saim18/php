<?php
session_start();
if (!isset( $_SESSION['name'])) {
    # code...
    header('location:index.php');
}


  $dbhost="localhost";
  $dbname="admin";
  $dbuser="root";
  $dbpass="";
?>
<!doctype html>
<html lang="en">
 <!-- head-->    
 <?php include 'section/head.php' ?>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    <?php include 'section/sidebar.php'?>
    </div>

    <div class="main-panel">
                 <!-- header-->    
                 <?php include 'section/header.php' ?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Records of All Users</h4>
                                <?php
                                if(isset($_GET['msg']))
                                {
                                echo '<p class="category">'.$_GET['msg'].'</p>';
                                }
                                ?>
                            </div>
                            <div class="content table-responsive table-full-width">
                            <?php
                            
                               $connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
                               if ($connect) {
                                # code...
                                $query = "SELECT * FROM userdata ";
                                $result = mysqli_query($connect,$query);
                                if(mysqli_num_rows($result)>0) {
                                    # code...
                                    
                                    echo '<table class="table table-hover table-striped">';
                                    echo "<th>ID</th>";
                                    echo "<th>Name</th>";
                                    echo "<th>Salary</th>";
                                    echo "<th>Country</th>";
                                    echo "<th>City</th>";
                                    echo "<th>Edit</th>";
                                    echo "<th>Delete</th>";
                                    echo "</tr>";
                                    while ($data=mysqli_fetch_assoc($result)) {
                                        # code...
                                        echo "<tr>";
                                        echo "<td>".$data['id']."</td>";
                                        echo "<td>".$data['username']."</td>";
                                        echo "<td>".$data['salary']."</td>";
                                        echo "<td>".$data['country']."</td>";
                                        echo "<td>".$data['city']."</td>";
                                        echo "<td><a href='Edit.php?user=".$data['id']."'>Edit</a></td>";
                                        echo "<td><a href='detele.php?user=".$data['id']."'>Delete</a></td>";
                                        echo "</tr>";
                                    }
                                    
                                    echo '</table>';
     
                                   
                                }
                                else{
                                    echo "NO data found";
                                }
                               

                               }
                               

                            ?>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

 <!-- footer-->    
 <?php include 'section/footer.php' ?>


    </div>
</div>


</body>

    <!--   Script   -->
     <?php include 'section/script.php' ?>  
    


</html>
