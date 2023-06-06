<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){

    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        
        <!-- custom admin css file link -->
        <link rel="stylesheet" href="css/admin_style.css">
    </head>
    <body>
        <?php include 'admin_header.php'; ?>

        <!--Admin dashboard section starts-->

        <section class="dashboard">

        <h1 class="heading">Dashboard</h1>

        <div class="box-container">
        <div class="box">
        <?php
        $total_pendings=0;
        $select_pending=mysqli_query($conn, "SELECT total_price FROM `orders`WHERE payment_status='pending") or die('query failed');

        if(mysqli_num_rows($select_pending)>0)
        {
            while($fetch_pending=mysqli_fetch_assoc($select_pending)){
                $total_price=$fetch_pendings['total_price'];
                $total_pendings+=$total_price;
            };
        };
        
        ?>
        <h3> <?php echo $total_pendings; ?></h3>
        <p>Total pendings</p>
        
        </div>
        </div>








        </section>






        <!--Admin dashboard section ends-->



        <!--custom admin js file link -->

        <script src="js/admin_script.js"></script>







    </body>
</html>