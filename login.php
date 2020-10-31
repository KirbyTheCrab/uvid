<?php 
$title = "Login";
include_once 'header.php';

?>

    <section class="signup-form" >
        <h2 class="login_title" style="color: black;">Login</h2>
        <form action="included/login.inc.php" method="post">
            <input class="username_text" type="text" name="uid" placeholder="Username or Email...">
            <input class="password_text" type="password" name="pwd" placeholder="Password...">
            <button class="submit_button" type="submit" name="submit">Login</button>
        </form>

        <style>
            
        </style>

        <?php

    if (isset($_GET['error'])) {
        if ($_GET['error'] =="emptyinput") {
            echo "<p>Fill in all fields!</p>";
            # code...
        }

        else if ($_GET["error"] =="wronglogin"){
            echo "<p>Incorrect login details. Try Again. </p>";
        }
    }
    ?>
    </section>

    <style>
        
        .signup-form{
        margin-left: auto;
        margin-right: auto;
        width: 5em;
        background-color: white;
        border-radius: 10px;
        }
        .submit_button{
            visibility: hidden;
        }
    </style>
    
    <?php 

include_once 'footer.php';

?>