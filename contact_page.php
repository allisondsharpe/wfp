<?php

$name = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];

$email_message = "
Name: ".$name."
Email: ".$email."
Message: ".$message."
";

mail("myblog@anonaspirer.com" . "New inquiry" . $email_message);

header("Location: confirmation.php");
?>
