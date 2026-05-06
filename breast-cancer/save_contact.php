<?php
include 'includes/db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO contacts(name,email,message)
VALUES('$name','$email','$message')";

mysqli_query($conn, $sql);

header("Location: contact.php?success=1");
?>