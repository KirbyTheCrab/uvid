<?php 
$title = "Sign Up";
include_once 'header.php';

?>

    <section style="color: white;" class="signup-form" >
        <h2 style="color: black;" >Sign Up</h2>
        <form action="included/signup.inc.php" method="post">
            <input class="name_text" type="text" name="name" placeholder="Full name...">
            <input class="email_text" type="text" name="email" placeholder="Enter your e-mail...">
            <input class="username_text" type="text" name="username" placeholder="Username...">
            <input class="password_text" type="password" name="pwd" placeholder="Password...">
            <input class="passwordrepeat_text" type="password" name="pwdrepeat" placeholder="Retype Password">
            <button class="submit_button" type="submit" name="submit">Sign Up</button>
        </form>
        <?php

    if (isset($_GET['error'])) {
        if ($_GET['error'] =="emptyinput") {
            echo "<p>Fill in all fields!</p>";
            # code...
        }

        else if ($_GET["error"] =="invalidUid"){
            echo "<p>Choose a better username</p>";
        }
        
        else if ($_GET["error"] =="invalidemail"){
            echo "<p>This email doesn't exist or already in use.</p>";
        }

        else if ($_GET["error"] =="passwordsdontmatch"){
            echo "<p>Your passwords do not match.</p>";
        }

        else if ($_GET["error"] =="usernametaken"){
            echo "<p>This username is already taken try another one.</p>";
        }
        
        # code...
    }
    ?>

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

    .name_text{
        width: 13.5rem;
    }
        </style>
    </section>
    
    <?php 

include_once 'footer.php';

?>