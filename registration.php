<?php

session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
  <title> Sign up </title>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="js/main.js"> </script>
</head>

<body>

  <header>
    <img src="assets/images/logo.png" alt="AA logo" id="logo"/>
    <a href="login.php"><button class="header-btn" type="button">Log in</button></a>
  </header>

  <div id="content">
   <div id="main_content">
     <h1>Become a Member</h1>
     <p> Please fill out the form below with the necessary information. </p>

     <form action="registration.php" method="post">
        First Name: <br>
        <input type="text" name="firstname" class="form_input" required><br>
        Last Name: <br>
        <input type="text" name="lastname" class="form_input" required><br>
        Email: <br>
        <input type="text" name="email" class="form_input" required><br>
        Password: <br>
        <input type="password" name="password" class="form_input" required><br>
        Confirm Password: <br>
        <input type="password" name="confirmpw" class="form_input" required><br>
        <input type="checkbox" name="terms" value="terms" required>I agree to the Terms of Service<br>
        <input type="submit" name="submit" class="main-btn" value="Submit">
      </form>
    </div>
  </div>

  <footer>
    <section class="footer-border">
      <h4>Stay Tuned</h4>
      <p>Connect with us on Twitter to see the latest news and updates.</p>
      <a href="https://twitter.com/AnonAspirer?lang=en"><img src="assets/icons/twitter_icon.png" /></a>
    </section>

    <section class="footer-border">
      <h4>Email Updates</h4>
      <p>Enter in your email to receive our offers and announcements.</p>
      <input type="text" />
      <img src="assets/icons/email_icon.png">
    </section>

    <section>
      <h4>Contact Us</h4>
      <p>Have any questions? Send us an email and we'll get back to you as soon as possible. </p>
      <a href="mailto:myblog@anonaspirer.com"><button id="footer-btn" type="button">Email Us</button></a>
    </section>

    <p id="copyright"> Copyright &copy; The Anonymous Aspirer, 2015. </p>
  </footer>

</body>
</html>

<?php
   $servername = "45.55.177.160";
   $username = "root";
   $password = "";
   $dbname = "register";

   // Create connection
   $db = new mysqli($servername, $username, $password, $dbname);
   if (mysqli_connect_errno()) {
     echo "MySQLi Connection was not established: " . mysqli_connect_error();
   }

    if(isset($_POST['submit'])) {
      $id = $_POST['id'];
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      $check_email = "SELECT * FROM users WHERE email = '$email'";
      $result_email= mysqli_query($db, $check_email) or die (mysqli_error($db)); if (mysqli_num_rows($result_email) > 0) {
        echo "Email already exists, please try another one!";
        exit();
      }

       $insertquery = "INSERT INTO users (id, firstname, lastname, email, password) VALUES ('$id','$firstname','$lastname','$email', '$password')";
       if (mysqli_query($db, $insertquery)) {
         echo "<script>window.open('home.php','_self')</script>";
       } else {
         echo "Error: " . $insertquery . "<br>" . mysqli_error($db);
       }
     }

?>﻿
