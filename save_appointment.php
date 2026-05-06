<?php
include 'includes/db.php';

$name = $_POST['patient_name'];
$email = $_POST['email'];
$date = $_POST['appointment_date'];
$message = $_POST['message'];

$sql = "INSERT INTO appointments(patient_name,email,appointment_date,message)
VALUES('$name','$email','$date','$message')";

mysqli_query($conn, $sql);

header("Location: appointment.php?success=1");
?>