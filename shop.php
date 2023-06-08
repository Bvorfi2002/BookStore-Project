<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){

    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"content="width=device-width,initial-scale=1.0">
        <title>Shop</title>


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php include 'header.php';?>

       <!-- costum js file link-->

       <?php include 'footer.php';?>

       <script src="js/script.js"></script>



    </body>
</html>