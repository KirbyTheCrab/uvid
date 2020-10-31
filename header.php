<?php
session_start(); 


?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.scss">   
    <link rel="icon" href="favicon-16x16.png"> 
    <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,700" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/index.js"></script>
    
    <meta charset="8"/>
    <meta name="viewport" content="width=device-width, inital-scale=1.0"/> 
    <meta http-equiv="X-UA-Compatiable" content="ie-edge"/>  
    
    <title><?php echo $title; ?></title>
   
    

</head>
<body style="overflow-x: hidden; background-color: black; background-attachment: fixed;">

<div style="height: 105px;" class="logoimg">
        <img style="position: relative; top: 0px;" src="images/backgroundimg2.png" alt="example" class="example_img">
    </div>
   
    <section class="nav-bar-table">
        <ul style="position: relative; top :60px;" class="nav-bar">
            <li class="nav-cell"><a href="https://discord.gg/byquUsv"style="text-decoration: none; color: white">Discord</li></a>
            <li class="nav-cell"><a href="contact.php"style="text-decoration: none; color: white">Contact</li></a>

            <?php
            if (isset($_SESSION["uid"])) {
                echo "<li class='nav-cell'><a href='profile.php'style='text-decoration: none; color: white'>Profile</li></a>";
                echo "<li class='nav-cell'><a href='included/logout.inc.php'style='text-decoration: none; color: white'>Logout</li></a>";
            }
            else{
                echo "<li class='nav-cell'><a href='login.php'style='text-decoration: none; color: white'>Login</li></a>";
                echo "<li class='nav-cell'><a href='signup.php'style='text-decoration: none; color: white'>Sign Up</li></a>";
            }

            ?>
            
        </ul>
    </section>

    <section class="nav-bar-table-left">
        <ul class="nav-bar-left">
            <li class="nav-cell"><a href="homepage.php"style="text-decoration: none; color: white">Home</li></a>
            <li class="nav-cell"><a href="about.php"style="text-decoration: none; color: white">About</li></a>
            <li class="nav-cell"><a href="products.php"style="text-decoration: none; color: white">Merch</li></a>
        </ul>
    </section>