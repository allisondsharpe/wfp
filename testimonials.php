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
  <title> Testimonials </title>
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
          <li><a href="testimonials.php" id="active-item">Testimonials</a></li>
        </ul>
      </li>
      <li class="border-right"><a href="entries.php">Entries</a>
        <ul>
          <li><a href="add_entry.php">Add New Entry</a></li>
          <li><a href="view_entry.php">View Entries</a></li>
        </ul>
      </li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </nav>

  <!-- End of Heading -->

  <div id="content">
    <div class="testimonials_sections">
      <h1>Lisa Smith</h1>
      <img src="assets/personas/persona1.jpg" class="personas" id="persona1"/>
      <p>"I first discovered The Anonymous Aspirer by creating my very first blog about two years ago and I've been receiving benefits from it since then. Before creating my very first blog, I was rejected from multiple publishers until I created my own independent blog with The Anonymous Aspirer. Now I'm an independent blogger and very much satisfied with how far I've come." <br> -Lisa Smith </p>
    </div>

    <div class="testimonials_sections" align="right">
      <h1>Larry Parker</h1>
      <img src="assets/personas/persona2.jpg" class="personas" id="persona2"/>
      <p>"The Anonymous Aspirer has provided me with a solid foundation for my offline business. I am the co-founder of a five star restuarant here in Orlando, Florida. Orlando is a large city filled with eager people willing to try new things, but before creating our blog to promote our offline business, we noticed that we weren't getting noticed as much. We were only well known by the locals here in Orlando, but now we have people from anywhere and everywhere traveling down here to Orlando just to dine at our restuarant and it's all from the foundation we built with The Anonymous Aspirer." <br> -Larry Parker</p>
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
