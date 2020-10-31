<?php 
$title = "Contact";
include_once 'header.php';

?>

<main class="contact-form">
    <h1 style="color: black;" class="contact-head">Contact Us!</h1>
    <input class="contact-name" type="text" name="name" placeholder="Full name">
    <input class="contact-subject" type="text" name="subject" placeholder="Subject">
    <input class="contact-email" type="text" name="email" placeholder="Email">
    <textarea class="contact-message" name="message" placeholder="Enter your message here!"></textarea>
    <button class="contact-submit" type="submit" name="submit">Send Email</button>

</main>

<style>
    .contact-form{
        width: 13.5rem;
        height: 5rem;
        font-size: 43px;
        background-color: white;
        padding: 29.45vh;
        text-align: center;
        position: relative;
        top: 200px;
        left: 0px; 
        border-radius: 10px;
    }

    .contact-head{
        position: relative;
        top: -16rem;
        font-size: 43px;
    }
    .contact-name{
    font-size: 25px;
    background-color: black;
    color: white;
    border-radius: 10px;
    margin-left: auto;
    margin-right: auto;
    position: relative;
    top: -15rem;
    }

    .contact-subject{
    font-size: 25px;
    background-color: black;
    color: white;
    border-radius: 10px;
    margin-left: auto;
    margin-right: auto;
    position: relative;
    top: -15rem;
    }

    .contact-email{
    font-size: 25px;
    background-color: black;
    color: white;
    border-radius: 10px;
    margin-left: auto;
    margin-right: auto;
    position: relative;
    top: -15rem;
    }

    .contact-message{
    width: 400px;
    height: 200px;
    font-size: 25px;
    background-color: black;
    color: white;
    border-radius: 10px;
    margin-left: auto;
    margin-right: auto;
    position: relative;
    top: -14rem;
    left: -6rem;
    }

    .contact-submit{
    background-color: black;
    color: white;
    font-size: 25px;
    border-radius: 10px;
    position: relative;
    top: -15rem;
    }
</style>
