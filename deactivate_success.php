<?php

if(!empty($_GET['id'])) {
    $id = $_GET['id'];
}

$db = mysqli_connect("45.55.177.160", "root", "") or die ("Could not connect to database");

mysqli_select_db($db, "register") or die ("Could not find database");

$sql = "DELETE FROM users WHERE id=$id ";
$result = mysqli_query($db, $sql);

mysqli_close($db);

header("Location: index.php");

?>
