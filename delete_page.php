<?php

$id = $_GET['id'];

$db = mysqli_connect("localhost", "root", "") or die ("Could not connect to database");

mysqli_select_db($db, "entries") or die ("Could not find database");

$sql = "DELETE FROM new_entry WHERE id=$id ";
$result = mysqli_query($db, $sql);

mysqli_close($db);

header("Location: entries.php");

 ?>
