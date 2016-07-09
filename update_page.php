<?php

echo $id = $_POST['id'];
echo $title = $_POST['title'];
echo $entry_date = $_POST['entry_date'];
echo $content = $_POST['content'];

$db = mysqli_connect("localhost", "root", "") or die ("Could not connect to database");

mysqli_select_db($db, "entries") or die ("Could not find database");

$sql = "UPDATE new_entry SET title='$title', entry_date='$entry_date', content='$content' WHERE id= $id";
$result = mysqli_query($db, $sql);

mysqli_close($db);

header("Location: view_entry.php");

 ?>
