<?php
include("includes/_.config.php");

$page_title = 'Registration Page';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Insert head.php -->
   <?php include("includes/head.php")?>
    <link rel="stylesheet" href= "Assests/css/registration.css">
</head>
<body>
    <header>
        <!--  Insert header.php -->
    <?php include("includes/header.php")?>

<body>
    <img src="images/1bg.jpg"
                            alt="image"/>
    <div class="Registration-form">
        <h1>Don't have an account? Lets get you one.</h1>
        <form action="#" method="pos">
            <p>Email:</p>
            <input required="Email" type="email" name="email" placeholder="Email">
            <p>Password:</p>
            <input required="Password" type="password" name="Password" placeholder="password" minlength="10">
            <p>Confirm Password:</p>
            <input required= "Password" type="password" name="Confirm password" placeholder="Confirm password" minlength="10">
            <button> Registration</button>
        </form>

    </div>
</body>
</body>
</html>