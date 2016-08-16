<?php

  $title = $_POST['title'];
  $entry_date = $_POST['entry_date'];
  $content = $_POST['content'];

  echo $title ."<br/>";
  echo $entry_date ."<br/>";
  echo $content ."<br/>";

  $db = mysqli_connect('45.55.177.160', 'root', '') or die ('Could not connect to db');

  mysqli_select_db($db, 'entries') or die ("Could not find database.");

  $sql = "INSERT INTO new_entry (title, entry_date, content) VALUES ('$title', '$entry_date', '$content')";
  $query = mysqli_query($db, $sql);

  mysqli_close($db);

  header("Location: entries.php");

?>
