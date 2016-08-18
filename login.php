<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Log in </title>
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
    <a href="registration.php"><button class="header-btn" type="button">Sign up</button></a>
  </header>

  <div id="content">
    <div id="main_content">
        <h1>Log in to Your Account</h1>
        <p>Enter in the correct email address and password that you created for your account. </p>

        <form action="login.php" method="post">
          Email: <br>
          <input type="text" name="email" class="form_input" required><br>
          Password: <br>
          <input type="password" name="password"  class="form_input" required><br>
          <a href="">Forgot Password?</a>
          <input type="submit" name="login" class="main-btn" value="Submit">
        </form>
      </div>
  </div>

  <footer>
    <section class="border-right">
      <h4>Stay Tuned</h4>
      <p>Connect with us on Twitter to see the latest news and updates.</p>
      <a href="https://twitter.com/AnonAspirer?lang=en"><img src="assets/icons/twitter_icon.png" /></a>
    </section>

    <section class="border-right">
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

$db = mysqli_connect("45.55.177.160", "root", "");
mysqli_select_db($db, "register");

if(isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $check_user = "SELECT * from users WHERE email = '$email' AND password = '$password'";

  $run = mysqli_query($db, $check_user);

  if(mysqli_num_rows($run) > 0) {

    $_SESSION['email'] = $email;

    echo "<script>window.open('home.php', '_self')</script>";
  }else{
    echo "Email or password is incorrect!";
  }
}

 ?>
