<?php

session_start();

if(!$_SESSION['email']) {
  header("location: login.php");
}

 ?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Contact Us </title>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/nav.css">
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
    <a href="settings.php"><button id="settings" class="header-btn" type="button">Settings</button></a>
  </header>

  <nav>
    <ul>
      <li class="border-right"><a href="home.php">Home</a></li>
      <li class="border-right"><a href="about.php">About</a>
        <ul>
          <li><a href="testimonials.php">Testimonials</a></li>
        </ul>
      </li>
      <li class="border-right"><a href="entries.php">Entries</a>
        <ul>
          <li><a href="add_entry.php">Add New Entry</a></li>
          <li><a href="view_entry.php">View Entries</a></li>
        </ul>
      </li>
      <li><a href="contact.php" id="active-item">Contact</a></li>
    </ul>
  </nav>

  <!-- End of Heading -->

  <div id="content">
    <div id="contact_info">
      <h1>Contact Us</h1>
      <p>Call us at 555-555-5555 or email us at myblog@anonaspirer.com</p>
      <p>Follow us on Twitter <br> @anonaspirer</p>
    </div>

    <form method="post" action="contact_page.php" id="contact_form">
      <h3>Name:</h3>
      <input type="text" name="name" required />
      <h3>Email:</h3>
      <input type="text" name="email" required />
      <h3>Send us your feedback:</h3>
      <textarea name="message" required> </textarea> <br>
      <button type="submit" class="main-btn">Submit</button>
    </form>
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
