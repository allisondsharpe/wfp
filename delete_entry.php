<?php

$id = $_GET['id'];

$db = mysqli_connect("localhost", "root", "") or die("Could not connect to database");

mysqli_select_db($db, "entries") or die ("Could not find database.");

$sql = "SELECT * FROM new_entry WHERE id = $id";
$result = mysqli_query($db, $sql);

$row = mysqli_fetch_array($result);

?>


<!DOCTYPE html>
<html>
<head>
  <title> Delete Entry </title>
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
    <a href="logout.php"><button id="logout" class="header-btn" type="button">Log out</button></a>
  </header>

  <nav>
    <ul>
      <li class="border-right"><a href="home.php">Home</a></li>
      <li class="border-right"><a href="about.php">About</a>
        <ul>
          <li><a href="testimonials.php">Testimonials</a></li>
        </ul>
      </li>
      <li class="border-right"><a href="entries.php">My Entries</a>
        <ul>
          <li><a href="add_entry.php">Add a New Entry</a></li>
          <li><a href="view_entry.php" id="active-item">View Entries</a></li>
        </ul>
      </li>
      <li><a href="contact.php">Contact Us</a></li>
    </ul>
  </nav>

  <!-- End of Heading -->

  <div id="content">

    <h1> Are you sure you want to delete this entry? </h1>
    <table>
      <tr>
        <th> Title </th>
        <th> Date </th>
        <th> Content </th>
        <th> Action </th>
      </tr>
    <?php

      echo "<tr>";
      echo "<td> ".$row['title']."</td>";
      echo "<td>".$row['entry_date']."</td>";
      echo "<td>".$row['content']."</td>";
      echo "<td> <a class='entries-btn' href=\"delete_page.php?id=". $row['id'] ."\"> Delete </a>
      <a class='entries-btn' href=\"entries.php\"> Cancel </a></td>";
      echo "</tr>";

      ?>
    </table>
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

mysqli_close($db);

?>