<?php
//Connect database
include 'database/connect.php';

//Create datase

//create table

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quaint portfolio</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- header section starts  -->

    <?php include 'Template/header.php'; ?>

    <!-- header section ends -->

    <div id="menu" class="fas fa-bars"></div>

    <!-- home section starts  -->

    <?php include 'Template/home.php'; ?>


    <!-- home section ends -->

    <!-- about section starts  -->

    <?php include 'Template/about.php'; ?>

    <!-- about section ends -->

    <!-- education section starts  -->
    <?php include 'Template/education.php'; ?>


    <!-- education section ends -->

    <!-- portfolio section starts  -->

    <?php include 'Template/portfolio.php'; ?>

    <!-- portfolio section ends -->

    <!-- contact section starts  -->

    <?php include 'Template/contact.php'; ?>

    <!-- contact section ends -->


    <!-- scroll top button  -->

    <a href="#home" class="top">
        <img src="images/scroll-top-img.png" alt="">
    </a>

    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>


</body>

</html>