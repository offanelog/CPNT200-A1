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

        

    <img src="images/realbg.jpg"
                            alt="image"/>
    <div class="Login-form">
        <h1>Have an account? Log in.</h1>
        <form action="#" method="pos">
            <p>Email:</p>
            <input required="Email" type="email" name="email" placeholder="Email">
            <p>Password:</p>
            <input required="password" type="password" name="Password" placeholder="password" minlength="10">
            <button type="submit">Login</button>
        </form>
          <!-- Insert Footer -->
        <?php include("includes/footer.php")?>
    </div>
</header>
</body>
</html>